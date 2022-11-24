// import axios from 'axios';

// import classNames from 'classnames/bind';
// import { useState, useEffect, useCallback, memo, sendData } from 'react';
// import * as ReactDOM from 'react-dom';
// import toast, { Toaster } from 'react-hot-toast';

// import Radio from '@mui/material/Radio';
// import RadioGroup from '@mui/material/RadioGroup';
// import FormControlLabel from '@mui/material/FormControlLabel';
// import FormControl from '@mui/material/FormControl';
// import FormLabel from '@mui/material/FormLabel';

// import { Checkbox } from '@mui/material';
// import { formatCurrency } from '~/utils/format';
// import DropdownCus from '~/components/DropdownCus';
// import styles from './Address.module.scss';
// const cx = classNames.bind(styles);
// function Address({ callbackAddress, orderSubmitted }) {
//    var listDelivery = [
//       { service_type_id: 1, name: 'Giao hàng nhanh', status: 'disabled' },
//       { service_type_id: 2, name: 'Giao hàng tiêu chuẩn', status: 'disabled' },
//       { service_type_id: 3, name: 'Giao hàng tiết kiệm', status: 'disabled' },
//    ];
//    const shopId = 3392112;
//    const districtShop = 1453;
//    //list
//    const [listProvince, setListProvince] = useState([]);
//    const [listDistrict, setListDistrict] = useState([]);
//    const [listWard, setListWard] = useState([]);
//    const [listDeliveryAvailable, setListDeliveryAvailable] = useState(listDelivery);

//    //value
//    const [valueProvince, setValueProvince] = useState({ code: '', name: '' });
//    const [valueDistrict, setValueDistrict] = useState({ code: '', name: '' });
//    const [valueWard, setValueWard] = useState({ code: '', value: '' });
//    const [valueDetail, setValueDetail] = useState('');
//    const [submit, setSubmit] = useState(orderSubmitted);
//    const [valueDelivery, setValueDelivery] = useState('');
//    const [deliveryFee, setDeliveryFee] = useState('');
//    const fetchDataProvince = () => {
//       axios({
//          method: 'get',
//          url: 'https://online-gateway.ghn.vn/shiip/public-api/master-data/province',
//          headers: {
//             token: 'd232b571-551c-11ed-8a70-52fa25d1292f',
//          },
//       })
//          .then((res) => {
//             var list = [];
//             res.data.data.map((item) => {
//                list.unshift({ code: item.ProvinceID, name: item.ProvinceName });
//             });
//             setListProvince(list);
//          })
//          .catch((err) => console.log(err));
//    };
//    //province
//    useEffect(() => {
//       fetchDataProvince();
//    }, []);
//    //district
//    useEffect(() => {
//       const fetchDataDistrict = () => {
//          axios({
//             method: 'get',
//             url: `https://online-gateway.ghn.vn/shiip/public-api/master-data/district?province_id=${valueProvince.code}`,
//             headers: {
//                token: 'd232b571-551c-11ed-8a70-52fa25d1292f',
//             },
//          })
//             .then((res) => {
//                var list = [];
//                res.data.data.map((item) => {
//                   if (
//                      !item.DistrictName.toLowerCase().includes('đặc biệt') &&
//                      !item.DistrictName.toLowerCase().includes('vật tư')
//                   )
//                      list.unshift({ code: item.DistrictID, name: item.DistrictName });
//                });
//                // setListDeliveryAvailable([]);
//                setListDistrict(list);
//                listWard.length > 0 && setListWard([]);
//                refreshDelivery();
//             })
//             .catch((err) => console.log(err));
//       };
//       if (valueProvince.code !== '') {
//          fetchDataDistrict();
//       }
//    }, [valueProvince]);
//    //ward
//    useEffect(() => {
//       const fetchDataWard = () => {
//          axios({
//             method: 'get',
//             url: `https://online-gateway.ghn.vn/shiip/public-api/master-data/ward?district_id=${valueDistrict.code}`,
//             headers: {
//                token: 'd232b571-551c-11ed-8a70-52fa25d1292f',
//             },
//          })
//             .then((res) => {
//                var list = [];
//                res.data.data.map((item) => {
//                   if (
//                      !item.WardName.toLowerCase().includes('đặc biệt') &&
//                      !item.WardName.toLowerCase().includes('vật tư')
//                   )
//                      list.unshift({ code: item.WardCode, name: item.WardName });
//                });
//                setListWard(list);
//                refreshDelivery();
//             })
//             .catch((err) => console.log(err));
//       };

//       if (valueDistrict.code !== '') {
//          fetchDataWard();
//       }
//    }, [valueDistrict]);
//    //delivery
//    useEffect(() => {
//       const fetchDelivery = () => {
//          axios({
//             method: 'get',
//             url: `https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/available-services`,
//             headers: {
//                token: 'd232b571-551c-11ed-8a70-52fa25d1292f',
//             },
//             params: {
//                shop_id: shopId,
//                from_district: 1453,
//                to_district: valueDistrict.code,
//             },
//          })
//             .then((res) => {
//                var list = [
//                   { service_type_id: 1, name: 'Giao hàng nhanh', status: 'disabled' },
//                   { service_type_id: 2, name: 'Giao hàng tiêu chuẩn', status: 'disabled' },
//                   { service_type_id: 3, name: 'Giao hàng tiết kiệm', status: 'disabled' },
//                ];
//                res.data.data.map((item) => {
//                   list.map((listItem) => {
//                      if (listItem.service_type_id === item.service_type_id) {
//                         listItem.status = '';
//                      }
//                   });
//                });
//                setValueDelivery('');
//                // console.log(list);
//                setListDeliveryAvailable(list);
//             })
//             .catch((err) => console.log(err));
//       };
//       valueWard.code !== '' && fetchDelivery();
//    }, [valueWard]);
//    //fee
//    useEffect(() => {
//       const fetchDeliveryFee = () => {
//          axios({
//             method: 'get',
//             url: `https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee`,
//             headers: {
//                token: 'd232b571-551c-11ed-8a70-52fa25d1292f',
//             },
//             params: {
//                service_type_id: valueDelivery,
//                insurance_value: null,
//                coupon: null,
//                from_district_id: districtShop,
//                to_district_id: valueDistrict.code,
//                to_ward_code: valueWard.code,
//                height: 10,
//                length: 25,
//                weight: 1000,
//                width: 15,
//             },
//          })
//             .then((res) => {
//                // console.log(res.data.data.total);
//                setDeliveryFee(res.data.data.total);
//             })
//             .catch((err) => console.log(err));
//       };
//       valueDelivery !== '' && fetchDeliveryFee();
//    }, [valueDelivery]);

//    const refreshDelivery = () => {
//       setListDeliveryAvailable(listDelivery);
//       setValueDelivery('');
//       setDeliveryFee('');
//    };

//    //callback
//    const callbackDropdownProvince = useCallback((childData) => {
//       setValueProvince(childData);
//    }, []);
//    const callbackDropdownDistrict = useCallback((childData) => {
//       setValueDistrict(childData);
//    }, []);
//    const callbackDropdownWard = useCallback((childData) => {
//       setValueWard(childData);
//    }, []);
//    const handleChange = (e) => {
//       setValueDetail(e.target.value);
//    };
//    const handleChangeDelivery = (e) => {
//       setValueDelivery(e.target.value);
//    };

//    useEffect(() => {
//       var data = getData();
//       // if (data !== undefined) notify('Vui lòng nhập địa chỉ');
//       sendData(data);
//    });

//    sendData = (data) => {
//       callbackAddress(data);
//    };
//    const getData = () => {
//       // var value = dDOMNode(document.getElementById('inputDetail')).value;
//       var p = ReactDOM.findDOMNode(document.getElementById('selectProvince'));
//       p = p.children[0].children[0].children[0].innerText;
//       var d = ReactDOM.findDOMNode(document.getElementById('selectDistrict'));
//       d = d.children[0].children[0].children[0].innerText;
//       var w = ReactDOM.findDOMNode(document.getElementById('selectWard'));
//       w = w.children[0].children[0].children[0].innerText;
//       if (
//          p === 'Chọn Tỉnh/Thành phố' ||
//          d === 'Chọn Quận/Huyện' ||
//          w === 'Chọn Phường/Xã' ||
//          // value === undefined ||
//          valueDetail === '' ||
//          deliveryFee === ''
//       ) {
//          // notify('Vui lòng nhập địa chỉ');
//          return;
//       } else return { detail: valueDetail, p: p, d: d, w: w, fee: deliveryFee, c: 'true' };
//    };
//    const notify = (text) => toast.error(text);

//    // console.log('render address');
//    return (
//       <div className={cx('wrapper')}>
//          <Toaster position="top-right" reverseOrder={false} />

//          <div className={cx('title')}>THÔNG TIN GIAO HÀNG</div>

//          <div className={cx('container')}>
//             <div className={cx('title-small')}>Chọn địa chỉ giao hàng</div>

//             <div className={cx('address')}>
//                <div className={cx('address-item')} id="selectProvince">
//                   <DropdownCus
//                      callbackDropDown={callbackDropdownProvince}
//                      options={listProvince}
//                      placeholder="Chọn Tỉnh/Thành Phố"
//                   />
//                   <span>Chọn tỉnh hoặc thành phố</span>
//                </div>
//                <div className={cx('address-item')} id="selectDistrict">
//                   <DropdownCus
//                      callbackDropDown={callbackDropdownDistrict}
//                      options={listDistrict}
//                      placeholder="Chọn Quận/Huyện"
//                   />
//                   <span>Chọn quận hoặc huyện</span>
//                </div>
//                <div className={cx('address-item')} id="selectWard">
//                   <DropdownCus
//                      callbackDropDown={callbackDropdownWard}
//                      options={listWard}
//                      placeholder="Chọn Phường/Xã"
//                   />
//                   <span>Chọn phường hoặc xã</span>
//                </div>
//             </div>
//             <div className={cx('address')}>
//                <input
//                   value={valueDetail}
//                   onChange={handleChange}
//                   id="inputDetail"
//                   placeholder="Nhập địa chỉ giao hàng chi tiết (Số nhà, tên đường, tổ dân phố)"
//                />
//             </div>
//          </div>
//          <div className={cx('container')}>
//             <div className={cx('title-small')}>Chọn phương thức giao hàng</div>
//             <div className={cx('delivery')}>
//                {/* {listDelivery[0].short_name} */}

//                <FormControl className={cx('radio-button-delivery')}>
//                   <RadioGroup
//                      value={valueDelivery}
//                      onChange={handleChangeDelivery}
//                      aria-labelledby="demo-radio-buttons-group-label"
//                      name="radio-buttons-group"
//                   >
//                      {listDeliveryAvailable.map((delivery) =>
//                         delivery.status === 'disabled' ? (
//                            <FormControlLabel
//                               key={delivery.service_type_id}
//                               value="disabled"
//                               disabled
//                               control={<Radio className={cx('radio-button')} />}
//                               label={delivery.name}
//                            />
//                         ) : (
//                            <FormControlLabel
//                               key={delivery.service_type_id}
//                               value={delivery.service_type_id}
//                               control={<Radio className={cx('radio-button')} />}
//                               label={delivery.name}
//                            />
//                         ),
//                      )}
//                   </RadioGroup>
//                </FormControl>

//                {deliveryFee !== '' && (
//                   <div className={cx('delivery-fee')}>
//                      <p>Giá cước giao hàng:</p>
//                      <p className={cx('fee')}> {formatCurrency(deliveryFee, '₫')}</p>
//                   </div>
//                )}
//             </div>
//          </div>
//       </div>
//    );
// }

// export default memo(Address);
