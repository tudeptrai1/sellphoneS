import React, {useState, useEffect} from "react";
import axios from 'axios';
import swal from 'sweetalert';
import { useNavigate } from "react-router-dom";
function Login() {
   function DisplayForgotPassword() {
      document.getElementById("formlogin").classList.add("disnone"); 
      document.getElementById("forgotPassword").classList.remove("disnone");   
}  
   const history = useNavigate();
   const initialValues = {email: '', password: ''};
   const [loginInput , setLogin] = useState({initialValues});
   const [formErrors, setFormErrors] = useState({});
   const [isSubmit, setIsSubmit] = useState(false);
   const handleInput = (e) =>{
      e.persist();//tiep tuc su kien, neu khong co thi su kien 1 la null khi su kien 2 duoc tao
      setLogin({...loginInput, [e.target.name]: e.target.value});
   };

   const loginSubmit = (e) => {
      e.preventDefault();//ngan chan gui form mac dinh
      setFormErrors(validate(loginInput));
      setIsSubmit(true);
      const data = {
         email: loginInput.email,
         password: loginInput.password,
      }
      axios.get('/sanctum/csrf-cookie').then(response => {
         axios.post('https://jsonplaceholder.typicode.com/users', data).then(res => {
            if(res.data.status === 200)
            {          
               localStorage.setItem('auth_token', res.data.token);
               localStorage.setItem('auth_name', res.data.username);

               swal("Success", res.data.message, "success");
               history.push('/');         
            }
            else if(res.data.status === 401)
            {
               swal("Warning", res.data.message, "warning");
            }                     
         });
     });      
   };

   useEffect(() =>{
      if(Object.keys(formErrors).length === 0 && isSubmit){
         console.log(loginInput);
      }
   }, [formErrors])
   const validate = (values) => {
      const errors = {};
      const regex = /^([\w\.])+@([a-zA-Z0-9\-])+\.([a-zA-Z]{2,4})(\.[a-zA-Z]{2,4})?$/g; 
      if(!values.email){
         errors.email = "Email is required!";
      }else if(!regex.test(values.email)){
         errors.email = "This is not a valid email format!";
      }
      if(!values.password) {
         errors.password = "Password is required!";
      }else if(values.password.length < 4) {
         errors.password = "Password must be more than 4 character";
      }
      return errors;
   }
   return (
      <div className="Auth-form-container">        
         <form className="Auth-form" onSubmit={loginSubmit}>
            <div className="Auth-form-content">
               <div className="form-group mt-4">
                  <input type="email" name="email" onChange={handleInput} value={loginInput.email} className="form-control mt-1" placeholder="Email" />
                  
               </div>
               <p className="error-text">{formErrors.email}</p>
               <div className="form-group mt-4">
                  <input type="password" name="password" onChange={handleInput} value={loginInput.password} className="form-control mt-1" placeholder="Nhập mật khẩu" />
                  
               </div>
               <p className="error-text">{formErrors.password}</p>
               <div className="d-grid gap-2 mt-1">
                  <button type="submit" className="btn btnlogin">
                     ĐĂNG NHẬP
                  </button>
               </div>
               <p className="forgot-password text-right mt-2">
                  <a href="#" onClick={DisplayForgotPassword}>Quên mật khẩu?</a>
               </p>
            </div>
         </form>
      </div>
   );
};
export default Login;
