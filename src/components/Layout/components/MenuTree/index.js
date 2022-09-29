import classNames from 'classnames/bind';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

import { faAngleRight } from '@fortawesome/free-solid-svg-icons';

import ListItem from './ListItem';
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
   return (
      <div className={cx('wrapper')}>
         <div className={cx('inner')}>
            {itemPhones.map((item) => (
               <div className={cx('item-phone')} key={item.id}>
                  <p className={cx('name')}>{item.name}</p>
                  <button>
                     <FontAwesomeIcon icon={faAngleRight} />
                  </button>
               </div>
            ))}
         </div>
         <div className={cx('list')}>
            <ListItem />
         </div>
      </div>
   );
}

export default MenuTree;
