import { useState, useEffect } from 'react';
import classNames from 'classnames/bind';
import DropdownCustom from '../DropdownCustom';
import styles from './Address.module.scss';
const cx = classNames.bind(styles);
function Address() {
   const [listProvince, setListProvince] = useState([]);
   //    const [listDistrict, setListDistrict] = useState([]);
   //    const [listWard, setListWard] = useState([]);
   //    const [province, setProvince] = useState();
   //    const [district, setDistrict] = useState();
   //    const [ward, setWard] = useState();
   const fetchData = () => {
      fetch('https://provinces.open-api.vn/api/p')
         .then((response) => {
            return response.json();
         })
         .then((data) => {
            setListProvince(data);
         });
   };
   useEffect(() => {
      fetchData();
      //   fetch(`https://provinces.open-api.vn/api/p`)
      //      .then((res) => res.json())
      //      .then((res) => {
      //         setListProvince(res.data);
      //      });
   }, []);
   console.log(listProvince);
   return (
      <div className={cx('wrapper')}>
         <div className={cx('province')}>
            <DropdownCustom option={listProvince} placeholder="Chọn Tỉnh/Thành phố" />
         </div>
         <div className={cx('district')}>
            <DropdownCustom />
         </div>
         <div className={cx('ward')}>
            <DropdownCustom />
         </div>
      </div>
   );
}

export default Address;
