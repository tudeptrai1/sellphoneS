import classNames from 'classnames/bind';
import { formatCurrency } from '~/utils/format';
import * as ReactDOM from 'react-dom';
import toast, { Toaster } from 'react-hot-toast';

import { useSelector, useDispatch } from 'react-redux';
import * as cartService from '~/services/cartService';
import { setAmountCart, setAmountProductCart } from '~/redux/generalInfoSlice';
import { addToOrder, removeFromOrder, updateInformationOrder } from '~/redux/orderSlice';

import styles from './CartItem.module.scss';
const cx = classNames.bind(styles);
function CartItem({ data }) {
   const generalInfo = useSelector((state) => state.generalInfo);
   const order = useSelector((state) => state.order);

   const dispatch = useDispatch();
   const handleClickAmountUp = () => {
      var a = ReactDOM.findDOMNode(document.getElementById(`amount_cart_${data.id}`));
      Number(a.value) + 1 <= data.amount ? (a.value = Number(a.value) + 1) : toast.error('Không đủ số lượng');
      const res = cartService.update(generalInfo.user.id, data.id, a.value);
      dispatch(setAmountProductCart({ product_id: data.id, amount: a.value }));
      dispatch(setAmountCart({ amount: Number(generalInfo.amountCart) + 1 }));
      var b = ReactDOM.findDOMNode(document.getElementById(`container-${data.id}`));
      b.checked && dispatch(updateInformationOrder({ product: data, type: 'UP' }));
   };
   const handleClickAmountDown = () => {
      var a = ReactDOM.findDOMNode(document.getElementById(`amount_cart_${data.id}`));
      a.value = Number(a.value) - 1;
      const res = cartService.update(generalInfo.user.id, data.id, a.value);
      dispatch(setAmountProductCart({ product_id: data.id, amount: a.value }));
      dispatch(setAmountCart({ amount: Number(generalInfo.amountCart) - 1 }));
      var b = ReactDOM.findDOMNode(document.getElementById(`container-${data.id}`));
      b.checked && dispatch(updateInformationOrder({ product: data, type: 'DOWN' }));
   };
   const handleClick = () => {
      var a = ReactDOM.findDOMNode(document.getElementById(`container-${data.id}`));
      console.log(a.checked);
      a.checked ? dispatch(addToOrder({ product: data })) : dispatch(removeFromOrder({ product: data }));
   };
   return (
      <div className={cx('wrapper')}>
         <label className={cx('container')}>
            <input type="checkbox" data-checked="false" id={`container-${data.id}`} onClick={handleClick}></input>
            <span className={cx('checkmark')}></span>
            <div className={cx('content')}>
               <div className={cx('info')}>
                  <p className={cx('name')}>{data.name}</p>
                  <div className={cx('price')}>
                     {data.discount !== null ? (
                        <p className={cx('original-price')}>
                           {formatCurrency(
                              (data.amount_cart * (100 - data.discount.discount_value) * data.sell_price) / 100,
                              '₫',
                           )}
                        </p>
                     ) : (
                        <p className={cx('original-price')}>
                           {formatCurrency(data.amount_cart * data.sell_price, '₫')}
                        </p>
                     )}
                     {data.discount !== null ? (
                        <p className={cx('discount-price')}>
                           {formatCurrency(data.amount_cart * data.sell_price, '₫')}
                        </p>
                     ) : null}
                  </div>
                  {data.discount !== null ? <p className={cx('discount')}>{data.discount.description}</p> : null}

                  <div className={cx('number-input')}>
                     <p>Số lượng</p>
                     <input
                        className={cx('quantity')}
                        min="0"
                        name="quantity"
                        value={data.amount_cart}
                        type="number"
                        // onChange={handleChangeAmount}
                        readOnly
                        step="1"
                        id={`amount_cart_${data.id}`}
                     />
                     <button onClick={handleClickAmountUp}></button>
                     <button onClick={handleClickAmountDown} className={cx('plus')}></button>
                  </div>
               </div>
               <img src={data.images[0]} alt={data.name} />
            </div>
            {/* </div> */}
         </label>
      </div>
   );
}

export default CartItem;
