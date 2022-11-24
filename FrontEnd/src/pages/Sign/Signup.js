import React, {useState, useEffect} from "react";
import axios from 'axios';
import swal from 'sweetalert';
import { useNavigate } from "react-router-dom";

function SignUp() {
   
   const history = useNavigate();
   const initialValues = {username: '', address: '', email: '', phone: '', password: '', confirmpassword: ''};
   const [registerInput, setRegister] = useState({initialValues});
   const [formErrors, setFormErrors] = useState({});
   const [isSubmit, setIsSubmit] = useState(false);
   const handleInput = (e) => {
      e.persist();
      setRegister({...registerInput, [e.target.name]: e.target.value});
   };
   
   const registerSubmit = (e) =>{
      e.preventDefault();
      setFormErrors(validate(registerInput));
      console.log(setFormErrors(validate(registerInput)));
     if(Object.keys(validate(registerInput)).length === 0){
     // setIsSubmit(true);
      swal("Success","regis success", "success");
    }
      
      const data = {
         username: registerInput.username,
         address: registerInput.address,
         email: registerInput.email,
         phone: registerInput.phone,
         password: registerInput.password,
         confirmpassword: registerInput.confirmpassword,                
      }; 
     
      
   //    axios.get('/sanctum/csrf-cookie').then(response => {
   //       axios.post('https://jsonplaceholder.typicode.com/users', data).then(res =>{
   //          if(res.data.status === 200)
   //          {          
   //             localStorage.setItem('auth_token', res.data.token);
   //             localStorage.setItem('auth_name', res.data.username);
   //             swal("Success", res.data.message, "success");
   //             history.push('/');
   //          }
   //       });
   //   });
   };

   useEffect(() =>{
      if(Object.keys(formErrors).length === 0 && isSubmit){
         console.log(registerInput);
      }
   }, [formErrors])

   const validate = (values) => {
      const errors = {};
      const regexPhone=/^0[1-9]\d{8}$/g;
      const regexUsername = /[.*+?^=!#@~%&:${}()|\[\]\/\\ ]/g;
      const regexEmail = /^([\w\.])+@([a-zA-Z0-9\-])+\.([a-zA-Z]{2,4})(\.[a-zA-Z]{2,4})?$/g;
      const regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/g;
      if(!values.username){
         errors.username = "Username is required";
      }else if(regexUsername.test(values.username)){
         errors.username = "This is not a valid username format!";
      }
      if(!values.address){
         errors.address = "Address is required";
      }
      if(!values.email){
         errors.email = "Email is required";
      }else if(!regexEmail.test(values.email)){
         errors.email = "This is not a valid email format!";
      }
      if(!values.phone){
         errors.phone = "Phone is required";
      }else if(!regexPhone.test(values.phone)){
         errors.phone = "This is not a valid phone format!";
      }
      if(!values.password){
         errors.password = "Password is required";
      }else if(!regexPassword.test(values.password)){
         errors.password = "Password is not correct format!";
      }
      if(!values.confirmpassword){
         errors.confirmpassword = "Confirm password is required";
      }else if(values.password !== values.confirmpassword){
         errors.confirmpassword = "Confirm password is not correct";
      }
      return errors;      
   }
   return (
      <div className="Auth-form-container">
         <form className="Auth-form" onSubmit={registerSubmit}>
            <div className="Auth-form-content">
               <div className="form-group mt-4">                 
                  <input type="text" name="username" onChange={handleInput} value={registerInput.username} className="form-control mt-1" placeholder="Họ và Tên" />
                  
               </div>
               <p className="error-text">{formErrors.username}</p>
               <div className="form-group mt-4">                
                  <input type="text" name="address" onChange={handleInput} value={registerInput.address} className="form-control mt-1" placeholder="Địa chỉ" />
                  
               </div>               
               <p className="error-text">{formErrors.address}</p>
               <div className="form-group mt-4">                
                  <input type="email" name="email" onChange={handleInput} value={registerInput.email} className="form-control mt-1" placeholder="Email"/>                  
                  
               </div>
               <p className="error-text">{formErrors.email}</p>               
               <div className="form-group mt-4">                
                  <input type="text" name="phone" onChange={handleInput} value={registerInput.phone} className="form-control mt-1" placeholder="Số điện thoại" />
                  
               </div>
               <p className="error-text">{formErrors.phone}</p>
               <div className="form-group mt-4">                
                  <input type="password" name="password" onChange={handleInput} value={registerInput.password} className="form-control mt-1" placeholder="Mật khẩu" />
                  
               </div>
               <p className="error-text">{formErrors.password}</p>
               <div className="form-group mt-4">                
                  <input type="password" name="confirmpassword" onChange={handleInput} value={registerInput.confirmpassword}className="form-control mt-1" placeholder="Nhập lại mật khẩu" />
                  
               </div> 
               <p className="error-text">{formErrors.confirmpassword}</p>              
               <div className="d-grid gap-2 mt-4">
                  <button type="submit" className="btn btnSignup">ĐĂNG KÝ</button>
               </div>               
            </div>
         </form>
      </div>
   );
};
export default SignUp;
