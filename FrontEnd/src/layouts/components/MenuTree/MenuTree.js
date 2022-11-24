import { useState } from 'react';
import ListItem from './ListItem';
import MenuTreeItem from './MenuTreeItem';
import classNames from 'classnames/bind';
import styles from './MenuTree.module.scss';
const cx = classNames.bind(styles);
const itemPhones = [
   {
      name: 'iPhone',
      id: 1,
      priceDescProducts: [],
      bestSellingProducts: [],
      discountProducts: [],
   },
   {
      name: 'Samsung',
      id: 2,
      priceDescProducts: [],
      bestSellingProducts: [],
      discountProducts: [],
   },
   {
      name: 'Oppo',
      id: 3,
      priceDescProducts: [],
      bestSellingProducts: [],
      discountProducts: [],
   },
   {
      name: 'Vivo',
      id: 4,
      priceDescProducts: [],
      bestSellingProducts: [],
      discountProducts: [],
   },
];
// console.log('render - MenuTree');
function MenuTree() {
   const [listID, setListID] = useState('');

   const callbackFunction = (childData) => {
      setListID(childData);
   };

   return (
      <div className={cx('wrapper')}>
         <div className={cx('inner')}>
            {itemPhones.map((item) => (
               <div className={cx('menu-tree-item')} key={item.id}>
                  <MenuTreeItem item={item} key={item.id} parentCallback={callbackFunction} />
               </div>
            ))}
         </div>
         <div className={cx('list')}>
            <ListItem id={listID} />
         </div>
      </div>
   );
}

export default MenuTree;
