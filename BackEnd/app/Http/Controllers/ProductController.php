<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Image;
use App\Models\Memory;
use App\Models\Product;
use App\Models\ProductGroup;
use App\Models\TechSpec;
use App\Models\TechSpecDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $https = new \GuzzleHttp\Client;
        $q = $request->get('search');

        if ($q == null) {
            $response = $https->get(env('BASE_URL') . '/api/product');

        } else {
            $response = $https->get(env('BASE_URL') . '/api/product/' . $q);

        }
        $a = json_decode($response->getBody(), true);

        $result = $this->paginate($a['data'], 10);

        $result->appends(['search' => $q]);
        return view('admin.product.index', [
            'data' => $result,
        ]);


    }

    public function get($id)
    {
        $product = Product::find($id);

        $brand = ProductGroup::find($product->pg_id)->brand->select('id', 'name', 'slug', 'description', 'status')->first();
        $product->brand = [$brand];

        $image = ProductGroup::find($product->pg_id)->images->where('color_id', '=', $product->color_id)->first();
        $product->images = [$image->image1, $image->image2, $image->image3, $image->image4, $image->image5];

        $discount = DB::table('discount_details', 'dd')
            ->join('discounts as d', 'd.id', '=', 'dd.discount_id')
            ->where('dd.product_id', '=', $id)
            ->where('d.type', '=', 0)
            ->where('d.valid_until', '>=', now())
            ->orderBy('d.created_at', 'desc')
            ->select('d.*', 'dd.product_id')
            ->limit(1)
            ->get()
            ->first();
        $product->discount = $discount;

        $arr = [
            'status'  => true,
            'message' => "Chi tiết Sản phẩm",
            'data'    => $product,
        ];
        return response()->json($arr, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $color = Color::all();
        $memory = Memory::all();
        $tech_spec = TechSpec::all();
        $data = $request->all();
        $brand = Brand::all();

        $input = Validator::make($data, [
            'name'        => [
                'required',
                'string',
            ],
            'brand'       => [
                'required',
            ],
            'trending'    => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ]);

        if ($input->fails()) {

            return view('admin.product.create', ['color'     => $color,
                                                 'memory'    => $memory,
                                                 'brand'     => $brand,
                                                 'tech_spec' => $tech_spec,
            ])->withErrors($input);
        }

        foreach ($memory as $memo) {
            foreach ($color as $cl) {
                $name[] = $memo->id . '_' . $cl->id;

            }
        }

        // Product Group
        $product_group = [
            'name'        => $request->name,
            'brand_id'    => $request->brand,
            'description' => $request->description,
            'trending'    => $request->trending,
        ];

        ProductGroup::create($product_group);
        $a = ProductGroup::latest()->get()->first();
        $status = 0;
        if ($request->status === 'on')
            $status = 1;
        //End Product Group
        //        Image

        foreach ($color as $each) {
            if ($request->hasfile($each->id . '_image')) {
                $uploadPath = 'uploads/products/' . $each->name . '_' . $a->name;
                foreach ($request->file($each->id . '_image') as $imagefile) {
                    $x = 1;
                    $extention = $imagefile->getClientOriginalExtension();
                    $filename = $a->name . '_' . $x . '.' . $extention;
                    $imagefile->move($uploadPath, $filename);
                    $finalImagePathName = $uploadPath . '/' . $filename;
                    Image::create([
                        'pg_id'    => $a->id,
                        'color_id' => $each->id,
                        'image'    => $finalImagePathName,
                    ]);
                    $x++;
                }
            }
        }

        //End Image
        // Tech Spec
        foreach ($tech_spec as $temp) {
            $tech[] = $temp->id;
        }
        foreach ($tech as $i) {
            if ($data[$i] !== null) {
                $tech_insert[] = [
                    'tech_id' => $i,
                    'pg_id'   => $a->id,
                    'value'   => $data[$i],
                ];
            }
        }
        foreach ($tech_insert as $t) {
            TechSpecDetail::create($t);
        }
        //End Tech Spec
        foreach ($name as $i) {
            $temp = null;
            if (isset($data[$i . '_status'])) {
                $temp['name'] = explode("_", $i);
                $temp['price'] = $data[$i . '_price'];
                $temp['amount'] = $data[$i . '_amount'];
                $temp['product_name'] = ProductGroup::where('id', $a->id)->value('name') . ' ' . Memory::where('id', $temp['name'][0])->value('value') . ' ' . Color::where('id', $temp['name'][1])->value('name');

                $p_insert[] = [
                    'name'       => $temp['product_name'],
                    'pg_id'      => $a->id,
                    'color_id'   => $temp['name'][1],
                    'memory_id'  => $temp['name'][0],
                    'sell_price' => $temp['price'],
                    'amount'     => $temp['amount'],
                    'status'     => $status,
                ];
            }
        }
        foreach ($p_insert as $product) {
            Product::create($product);
        }
        return redirect()->route('product')->with('message', 'Successfully created');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function all(): \Illuminate\Http\JsonResponse
    {
        $products = Product::all();

        foreach ($products as $product) {
            $brand = ProductGroup::find($product->pg_id)->brand->select('id', 'name', 'slug', 'description', 'status')->first();
            $product->brand = $brand;

            $image = ProductGroup::find($product->pg_id)->images
                ->where('color_id', '=', $product->color_id)
                ->first();
            $product->images = [$image->image1, $image->image2, $image->image3, $image->image4, $image->image5];

            $discount = DB::table('discount_details', 'dd')
                ->join('discounts as d', 'd.id', '=', 'dd.discount_id')
                ->where('dd.product_id', '=', $product->id)
                ->where('d.type', '=', 0)
                ->where('d.valid_until', '>=', now())
                ->orderBy('d.created_at', 'desc')
                ->select('d.*', 'dd.product_id')
                ->limit(1)
                ->get()
                ->first();
            $product->discount = $discount;
        }

        $arr = [
            'status'  => true,
            'message' => "Danh sách sản phẩm",
            'data'    => $products,
        ];
        return response()->json($arr, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $color = Color::all();
        $memory = Memory::all();
        $brand = Brand::all();
        $tech_spec = TechSpec::all();

        return view('admin.product.create',
            ['color'     => $color,
             'memory'    => $memory,
             'brand'     => $brand,
             'tech_spec' => $tech_spec,
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        dd($product->pg_id);
    }

    public function searchName(Product $product)
    {

    }

    public function search(Request $request)
    {
        if ($request->name === null) $name_qr = "1=1";
        else $name_qr = 'name like \'%' . $request->name . '%\'';

        if ($request->amount === null) $amount_qr = "1=1";
        else $amount_qr = 'amount > 0 and status = 1 ';

        if ($request->min === null) $min_qr = "1=1";
        else $min_qr = 'sell_price >= ' . $request->min . ' ';

        if ($request->max === null) $max_qr = "1=1";
        else $max_qr = 'sell_price <= ' . $request->max . ' ';

        if ($request->get('brand') === null) $br_qr = '1=1';
        else {
            $br = ($request->get('brand'));
            $temp = implode(",", $br);
            $br_qr = 'brand_id in (' . $temp . ')';
        }

        if ($request->get('color') === null) $color_qr = '1=1';
        else {
            $color = ($request->get('color'));
            $temp = implode(",", $color);
            $color_qr = 'color_id in (' . $temp . ')';
        }

        if ($request->get('memory') === null) $memory_qr = '1=1';
        else {
            $memory = ($request->get('memory'));
            $temp = implode(",", $memory);
            $memory_qr = 'memory_id in (' . $temp . ')';
        }
        $request->orderPrice === null ? $orderPrice = "desc" : $orderPrice = $request->orderPrice;
        $request->orderName === null ? $orderName = "asc" : $orderName = $request->orderName;

        $result = DB::table('products')
            ->join('product_groups', 'products.pg_id', '=', 'product_groups.id')
            ->join('brands', 'product_groups.brand_id', '=', 'brands.id')
            ->join('images', function ($join) {
                $join->on('images.pg_id', '=', 'products.pg_id');
                $join->on('images.color_id', '=', 'products.color_id');
            }
            )
            ->select('products.*', 'product_groups.brand_id', 'brands.name as brand',
                'images.image1', 'images.image2', 'images.image3', 'images.image4', 'images.image5');
        $products = DB::table($result, 'a')
            ->whereRaw($name_qr)
            ->whereRaw($amount_qr)
            ->whereRaw($min_qr)
            ->whereRaw($max_qr)
            ->whereRaw($br_qr)
            ->whereRaw($color_qr)
            ->whereRaw($memory_qr)
            ->orderBy('sell_price', $orderPrice)
            ->orderBy('name', $orderName)
            ->limit($request->limit)
            ->select('*')
            ->get();

        $arr = ['status'  => true,
                'message' => "Danh sách sản phẩm ",
                'data'    => $products,
        ];
        return response()->json($arr, 200);
    }

    public function detail($pg_id): \Illuminate\Http\JsonResponse
    {
        $products = DB::table('products')->where('pg_id', '=', $pg_id)->select('*')->get();

        foreach ($products as $product) {
            $brand = ProductGroup::find($product->pg_id)->brand->select('id', 'name', 'slug', 'description', 'status')->first();
            $product->brand = $brand;

            $image = ProductGroup::find($product->pg_id)->images->where('color_id', '=', $product->color_id)->first();
            $product->images = [$image->image1, $image->image2, $image->image3, $image->image4, $image->image5];

            $discount = DB::table('discount_details', 'dd')
                ->join('discounts as d', 'd.id', '=', 'dd.discount_id')
                ->where('dd.product_id', '=', $product->id)
                ->where('d.type', '=', 0)
                ->where('d.valid_until', '>=', now())
                ->orderBy('d.created_at', 'desc')
                ->select('d.*', 'dd.product_id')
                ->limit(1)
                ->get()
                ->first();
            $product->discount = $discount;
        }

        $arr = [
            'status'  => true,
            'message' => "Danh sách sản phẩm theo group",
            'data'    => $products,
        ];

        return response()->json($arr, 200);
    }

    public function brand($brand_id): \Illuminate\Http\JsonResponse
    {

        $brand = Brand::find($brand_id)->select('id', 'name', 'slug', 'description', 'status')->first();

        $products = Brand::find($brand_id)->products;
        foreach ($products as $product) {
            $product->brand = $brand;
            $image = ProductGroup::find($product->pg_id)->images->where('color_id', '=', $product->color_id)->first();
            $product->images = [$image->image1, $image->image2, $image->image3, $image->image4, $image->image5];
            $discount = DB::table('discount_details', 'dd')
                ->join('discounts as d', 'd.id', '=', 'dd.discount_id')
                ->where('dd.product_id', '=', $product->id)
                ->where('d.type', '=', 0)
                ->where('d.valid_until', '>=', now())
                ->orderBy('d.created_at', 'desc')
                ->select('d.*', 'dd.product_id')
                ->limit(1)
                ->get()
                ->first();
            $product->discount = $discount;
        }

        $arr = [
            'status'   => true,
            'message'  => "Danh sách sản phẩm theo brand",
            'ID Brand' => $brand_id,
            'data'     => $products,
        ];
        return response()->json($arr, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

    }
}
