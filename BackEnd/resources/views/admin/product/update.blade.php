@extends('layouts.admin')
@section('content')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Update Product
        </h2>
    </div>
    <form action="{{route('product.update',$product->id)}} " method="post" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">

            <div class="intro-y col-span-11 2xl:col-span-9">
                <!-- BEGIN: Upload Product -->


                <!-- END: Upload Product -->

                <!-- BEGIN: Product Information -->

                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Information </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Product Name</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> Include more 10 characters to make it more attractive and easy for buyers to find, consisting of product type, brand, and information such as color, memory or type. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-name" type="text" class="form-control" value="{{$product->name}}"  name="name">
                                    @if($errors->has('name'))
                                        <div class="text-danger ">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Product Group</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select id="pg" class="form-select" name="pg_id">
                                        @foreach($product_group as $each)
                                            @if($each->id===$product->pg_id)
                                                <option value="{{$each->id}}" selected="true" >{{$each->name}}</option>
                                            @endif
                                            <option value="{{$each->id}}">{{$each->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- END: Product Information -->
                <!-- BEGIN: Multiple File Upload -->

                <!-- END: Multiple File Upload -->
                <!-- BEGIN: Product Detail -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Detail </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Product Status</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> If the status is active, your product can be searched for by potential buyers. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div class="form-check form-switch">
                                        <input id="product-status-active" class="form-check-input" type="checkbox" name="status"
                                               @if($product->status===1)checked
                                            @endif>
                                        <label class="form-check-label" for="product-status-active">Active</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">


                            </div>

                        </div>
                    </div>
                </div>
                <!-- END: Product Detail -->

                <!-- BEGIN: Product Variant (Details) -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Variant (Details) </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class= "font-medium">Variant List</div>
                                        </div>
                                        <div class="leading-relaxed  text-slate-500 text-xs mt-3"> Set the price and stock for each variant. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div class="overflow-x-auto">
                                        <table class="table border">
                                            <thead>
                                            <tr>
                                                <th class= "bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap ">Memory Select</th>
                                                <th class= "bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap">
                                                    <div class="flex items-center">Color Select <i data-lucide="help-circle" class="w-4 h-4 ml-2"></i></div>
                                                </th>
                                                <th class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !px-2">Import Price</th>
                                                <th class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !px-2">Sell Price</th>

                                                <th class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !px-2">
                                                    <div class="flex items-center">
                                                        <div class=" relative w-4 h-4 mr-2 -mt-0.5 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-primary/20 before:rounded-full lg:before:animate-ping after:content-[''] after:absolute after:w-4 after:h-4 after:bg-primary after:rounded-full after:border-4 after:border-white/60 after:dark:border-darkmode-300 "></div>
                                                        Stock <i data-lucide="help-circle" class="w-4 h-4 ml-2"></i>
                                                    </div>
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>

                                                <td rowspan="1" class="border-r">
                                                    <select id="pg" class= "form-select" name="memory_id">
                                                        @foreach($memory as $each)
                                                            @if($each->id ===$product->memory_id)
                                                                <option value="{{$each->id}}" selected="true" >{{$each->value}}</option>
                                                            @endif
                                                            <option value="{{$each->id}}">{{$each->value}}</option>
                                                        @endforeach
                                                    </select></td>
                                                <td><select id="pg" class="form-select" name="color_id">
                                                        @foreach($color as $each)
                                                            @if($each->id ===$product->color_id)
                                                                <option value="{{$each->id}}" selected="true" >{{$each->name}}</option>
                                                            @endif
                                                            <option value="{{$each->id}}">{{$each->name}}</option>
                                                        @endforeach
                                                    </select></td>

                                                <td class="!px-2">
                                                    <div class="input-group">
                                                        <div class="input-group-text">$</div>
                                                        <input type="text" class="form-control min-w-[6rem]" value="{{$product->imp_price}}"  name="imp_price">
                                                    </div>
                                                </td>
                                                <td class="!px-2">
                                                    <div class="input-group">
                                                        <div class="input-group-text">$</div>
                                                        <input type="text" class="form-control min-w-[6rem]" value="{{$product->sell_price}}" name="sell_price">
                                                    </div>
                                                </td>
                                                <td class="!px-2">
                                                    <input type="text" class="form-control min-w-[6rem]" placeholder="Stock" value="{{$product->amount}}" name="amount">
                                                </td>


                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Product Variant (Details) -->


                <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                    <a href="{{route('product')}}"> <button type="button"  class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Cancel</button></a>
                    <button type="submit"  class="btn py-3 btn-primary w-full md:w-52">Save</button>
                </div>

            </div>


            <div class="intro-y col-span-2 hidden 2xl:block">

                <div class="mt-10 bg-warning/20 dark:bg-darkmode-600 border border-warning dark:border-0 rounded-md relative p-5">
                    <i data-lucide="lightbulb" class="w-12 h-12 text-warning/80 absolute top-0 right-0 mt-5 mr-3"></i>
                    <h2 class="text-lg font-medium">
                        Tips
                    </h2>
                    <div class="mt-5 font-medium">Price</div>
                    <div class="leading-relaxed text-xs mt-2 text-slate-600 dark:text-slate-500">
                        <div>The image format is .jpg .jpeg .png and a minimum size of 300 x 300 pixels (For optimal images use a minimum size of 700 x 700 pixels).</div>
                        <div class="mt-2">Select product photos or drag and drop up to 5 photos at once here. Include min. 3 attractive photos to make the product more attractive to buyers.</div>
                    </div>
                </div>
            </div>

        </div>

    </form>

    <script>    function addfield(){

            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            var x = 1; //initlal text box count

            if(x < max_fields){ //max input box allowed
                $(wrapper).append('<div class="sm:grid grid-cols-6 gap-2 p-3"><div class="input-group w-full  mr-2"><div class="input-group-text">+</div><input type="text" class="form-control min-w-[6rem] w-1/2" placeholder="Name"><input type="text" class="form-control min-w-[6rem] mr-2 p-2" placeholder="Value"></div></div>');
                x++;
            }
        }

        function deleteimg() {

            const element = document.getElementById("box");
            element.remove();
        }</script>
@endsection
