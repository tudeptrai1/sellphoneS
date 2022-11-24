
const ForgotPassword = () => {
   function DisplayLogin(){
      document.getElementById("forgotPassword").classList.add("disnone");
      document.getElementById("formlogin").classList.remove("disnone");
   }
   return (
      <div className="Auth-form-container forgotpass">
         <form className="Auth-form">
            <div className="Auth-form-content">
               <div className="form-group mt-4">
                  <label for="email" class="form-label">
                     Quên mật khẩu
                  </label>
                  <input type="email" className="form-control mt-1" placeholder="Email" />
               </div>
               <div className="d-grid gap-2 mt-1">
                  <button type="submit" className="btn btnforgotpass">
                     GỬI
                  </button>
               </div>
               <p className="forgot-password text-right mt-2">
                  <a href="#" onClick={DisplayLogin}>Trở lại đăng nhập</a>
               </p>
            </div>
         </form>
      </div>
   );
};
export default ForgotPassword;
