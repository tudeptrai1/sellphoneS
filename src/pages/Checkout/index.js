import classNames from 'classnames/bind';
import { useState, useEffect, useCallback } from 'react';
import Address from '~/components/Address';
import DropdownCus from '~/components/DropdownCus';
import styles from './Checkout.module.scss';
const cx = classNames.bind(styles);

function Checkout() {
   //list
   const [listProvince, setListProvince] = useState([]);
   const [listDistrict, setListDistrict] = useState([]);
   const [listWard, setListWard] = useState([]);
   //value
   const [valueProvince, setValueProvince] = useState({ code: '', name: '' });
   const [valueDistrict, setValueDistrict] = useState({ code: '', name: '' });
   const [valueWard, setValueWard] = useState({ code: '', value: '' });
   //placeholder
   const [phDistrict, setPhDistrict] = useState('Chọn Quận/Huyện');
   const [phWard, setPhWard] = useState('Chọn Phường/Xã');

   const fetchDataProvince = () => {
      fetch('https://provinces.open-api.vn/api/p/')
         .then((response) => {
            return response.json();
         })
         .then((data) => {
            setListProvince(data);
         });
   };
   //province
   useEffect(() => {
      fetchDataProvince();
   }, []);
   //district
   useEffect(() => {
      const fetchDataDistrict = () => {
         fetch(`https://provinces.open-api.vn/api/p/${valueProvince.code}?depth=3`)
            .then((response) => {
               return response.json();
            })
            .then((data) => {
               setListDistrict(data);
               // setPhDistrict('Chọn Quận/Huyện');
            });
      };
      valueProvince.code !== '' && fetchDataDistrict();
   }, [valueProvince]);
   //ward
   useEffect(() => {
      const fetchDataWard = (districtName) => {
         listDistrict.districts.map((district) => {
            if (districtName === district.name) setListWard(district.wards);
         });
      };
      valueDistrict.code !== '' && fetchDataWard(valueDistrict.name);
   }, [valueDistrict]);

   //callback
   const callbackDropdownProvince = useCallback((childData) => {
      setValueProvince(childData);
   }, []);
   const callbackDropdownDistrict = useCallback((childData) => {
      setValueDistrict(childData);
      setPhDistrict('Chọn Quận/Huyện');
   }, []);
   const callbackDropdownWard = useCallback((childData) => {
      setValueWard(childData);
   }, []);

   //console.log
   // console.log('province ' + valueProvince.value);
   // console.log('district ' + valueDistrict.value);
   // console.log(phDistrict);

   console.log('render check out');
   return (
      <div className={cx('wrapper')}>
         <div className={cx('address')}>
            <DropdownCus
               callbackDropDown={callbackDropdownProvince}
               options={listProvince}
               placeholder="Chọn Tỉnh/Thành Phố"
            />
            <DropdownCus
               callbackDropDown={callbackDropdownDistrict}
               options={listDistrict.districts !== undefined ? listDistrict.districts : []}
               placeholder={phDistrict}
            />
            <DropdownCus
               callbackDropDown={callbackDropdownWard}
               options={listWard !== undefined ? listWard : []}
               placeholder={phWard}
            />
         </div>
      </div>
   );
}

export default Checkout;
