import { Fragment } from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import { publicRoutes } from '~/routes';
import { DefaultLayout } from '~/layouts';
function App() {
   return (
      <Router>
         <div className="app">
            <Routes>
               {publicRoutes.map((route, index) => {
                  const Layout = route.layout === null ? Fragment : DefaultLayout;
                  const Page = route.component;
                  return (
                     <Route
                        key={index}
                        path={route.path}
                        element={
                           <Layout>
                              <Page />
                           </Layout>
                        }
                     />
                  );
               })}
            </Routes>
         </div>
      </Router>
   );
}
export default App;
