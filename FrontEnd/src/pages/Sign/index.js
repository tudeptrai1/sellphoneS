import Login from './Login';
import SignUp from './Signup'
import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import './ContainLoginSignup.css';
import ForgotPassword from './forgotpassword';
import {Tabs, Tab } from 'react-bootstrap';


function ContainLoginSignup() {
   
   return (
      <div className="containerlogin">
         <div className="mainform">
            <div className="login-wrapper">
               <div className="main">
                  <div className="forgotPassword disnone" id="forgotPassword">
                     <ForgotPassword />
                  </div>
                  <div className="login-signup" id="formlogin">
                     <Tabs justify variant="pills" defaultActiveKey="tab-1" >
                        <Tab eventKey="tab-2" title="ĐĂNG KÝ" className="tabcontainer">
                           <SignUp />
                        </Tab>
                        <Tab eventKey="tab-1" title="ĐĂNG NHẬP" className="tabcontainer">
                           <Login />
                        </Tab>
                     </Tabs>
                  </div>
               </div>
            </div>
         </div>
      </div>
   );
}

export default ContainLoginSignup;
