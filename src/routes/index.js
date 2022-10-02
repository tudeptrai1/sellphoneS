import Home from '~/pages/Home';
import Searching from '~/pages/Searching';
import Admin from '~/pages/Admin';
import Cart from '~/pages/Cart';
import Product from '~/pages/Product';
import Catalog from '~/pages/Catalog';

//publicRoutes
const publicRoutes = [
   { path: '/', component: Home },
   { path: '/search', component: Searching },
   { path: '/cart', component: Cart },
   { path: '/catalog', component: Catalog },
   { path: '/product', component: Product },
   { path: '/admin', component: Admin, layout: null },
];
//privateRoutes
const privateRoutes = [];
export { publicRoutes, privateRoutes };
