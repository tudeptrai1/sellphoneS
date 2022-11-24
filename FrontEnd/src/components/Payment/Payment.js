import { useEffect } from 'react';
import { PayPalScriptProvider, PayPalButtons, usePayPalScriptReducer } from '@paypal/react-paypal-js';
import toast, { Toaster } from 'react-hot-toast';
import { useSelector, useDispatch } from 'react-redux';
import { phoneRe, emailRe } from '~/utils/format';
import * as orderService from '~/services/orderService';
import { generalInfoSlice } from '~/redux/generalInfoSlice';
// This values are the props in the UI
const amount = '2';
const currency = 'USD';
const style = { layout: 'vertical' };

// Custom component to wrap the PayPalButtons and handle currency changes
const ButtonWrapper = ({ currency, showSpinner }) => {
   // usePayPalScriptReducer can be use only inside children of PayPalScriptProviders
   // This is the main reason to wrap the PayPalButtons in a new component
   const [{ options, isPending }, dispatch] = usePayPalScriptReducer();
   const order = useSelector((state) => state.order);
   const generalInfo = useSelector((state) => state.generalInfo);

   const checkOrder = () => {
      toast.remove();
      if (order.listOrder.length === 0) {
         toast.error('Không có sản phẩm');
         return false;
      }
      if (order.nameReceive === '' || !phoneRe.test(order.phoneReceive) || !emailRe.test(order.emailReceive)) {
         toast.error('Vui lòng nhập đủ thông tin nhận hàng');
         return false;
      }
      if (
         order.addressReceive.province.name === null ||
         order.addressReceive.district.name === null ||
         order.addressReceive.ward.name === null ||
         order.addressReceive.detail === ''
      ) {
         toast.error('Vui lòng chọn địa chỉ giao hàng');
         return false;
      }
      return true;
   };
   useEffect(() => {
      dispatch({
         type: 'resetOptions',
         value: {
            ...options,
            currency: currency,
         },
      });
   }, [currency, showSpinner]);

   return (
      <>
         {showSpinner && isPending && <div className="spinner" />}
         <PayPalButtons
            style={style}
            disabled={false}
            forceReRender={[amount, currency, style]}
            fundingSource={undefined}
            createOrder={(data, actions) => {
               if (checkOrder) {
                  return actions.order
                     .create({
                        purchase_units: [
                           {
                              amount: {
                                 currency_code: currency,
                                 value: amount,
                              },
                           },
                        ],
                     })
                     .then((orderId) => {
                        // Your code here after create the order
                        return orderId;
                     });
               } else return null;
            }}
            onApprove={function (data, actions) {
               return actions.order.capture().then(function () {
                  const res = orderService.create(
                     generalInfo.user.id,
                     'PAYPAL PAYMENT',
                     order.nameReceive,
                     order.phoneReceive,
                     order.addressReceive.province.name,
                     order.addressReceive.district.name,
                     order.addressReceive.ward.name,
                     order.addressReceive.detail,
                     data.orderId,
                     order.listOrder,
                  );
                  // Your code here after capture the order
               });
            }}
         />
      </>
   );
};

export default function Payment() {
   return (
      <div style={{ maxWidth: '750px', minHeight: '100px' }}>
         <PayPalScriptProvider
            options={{
               'client-id': 'AQCM1ElPp0-S6fKxk4SQtubTe2jXQG9_NkIq3GdEikL0PL3owDc9UKdfXUU-iYRj3KZkIxVZDI2rTgHZ',
               components: 'buttons',
               currency: 'USD',
            }}
         >
            <ButtonWrapper currency={currency} showSpinner={false} />
         </PayPalScriptProvider>
      </div>
   );
}
