import config from '~/config';

import Home from '~/pages/Home';
import Searching from '~/pages/Catalog';
import Admin from '~/pages/Admin';
import Cart from '~/pages/Cart';
import Product from '~/pages/Product';
import Catalog from '~/pages/Catalog';
import OrderLookup from '~/pages/OrderLookup';

//publicRoutes
const publicRoutes = [
   { path: config.routes.home, component: Home },
   { path: config.routes.search, component: Searching },
   { path: config.routes.cart, component: Cart },
   { path: config.routes.catalog, component: Catalog },
   // { path: '/:id_product', component: Product },
   { path: config.routes.product, component: Product },
   { path: config.routes.lookup, component: OrderLookup },
   { path: config.routes.admin, component: Admin, layout: null },
];
//privateRoutes
const privateRoutes = [];
export { publicRoutes, privateRoutes };
