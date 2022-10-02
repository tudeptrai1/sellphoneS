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
   },
   {
      name: 'Samsung',
      id: 2,
   },
   {
      name: 'Oppo',
      id: 3,
   },
   {
      name: 'Vivo',
      id: 4,
   },
];
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
