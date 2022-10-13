import config from '~/config';

import Home from '~/pages/Home';
// import Admin from '~/pages/Admin';
import Cart from '~/pages/Cart';
import Product from '~/pages/Product';
import Catalog from '~/pages/Catalog';
import OrderLookup from '~/pages/OrderLookup';
import Checkout from '~/pages/Checkout';
import Sign from '~/pages/Sign';
import Account from '~/pages/Account';
import OrderDetail from '~/pages/OrderDetail';
import Wishlist from '~/pages/Wishlist';

//publicRoutes
const publicRoutes = [
   { path: config.routes.home, component: Home },
   { path: config.routes.cart, component: Cart },
   { path: config.routes.catalog, component: Catalog },
   // { path: '/:id_product', component: Product },
   { path: config.routes.product, component: Product },
   { path: config.routes.lookup, component: OrderLookup },
   { path: config.routes.checkout, component: Checkout },
   { path: config.routes.sign, component: Sign },
   { path: config.routes.account, component: Account },
   { path: config.routes.orderdetail, component: OrderDetail },
   { path: config.routes.wishlist, component: Wishlist },

   // { path: config.routes.admin, component: Admin, layout: null },
];
//privateRoutes
const privateRoutes = [];
export { publicRoutes, privateRoutes };
