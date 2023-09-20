import React from "react";
import "bootstrap/dist/css/bootstrap.min.css";
import Logo from "../assets/image/LogoUser.jpg";

function Login() {
  return (
    <div className="wrapper bg-dark text-white d-flex align-items-center justify-content-center w-100">
      <div className="login rounded">
        <div className="d-flex align-items-center justify-content-center">
        <img src={Logo} alt="logo" width={150} />
        </div>
        <form action="dashboard" className="needs-validation">
          <div className="form-group was-validated mb-1 mt-1">
            <label htmlFor="email" className="form-label">Email</label>
            <input type="email" placeholder="Enter Your Email" className="form-control" required />
            <div className="invalid-feedback">Please Enter Your Email</div>
          </div>
          <div className="form-group was-validated mb-1">
            <label htmlFor="password" className="form-label">Password</label>
            <input type="password" placeholder="Enter Your Password" className="form-control" required />
            <div className="invalid-feedback">Please Enter Your Password</div>
          </div>
          <button type="submit" className="btn btn-dark mt-2 w-100 fw-bold">
            Login Now !
          </button>
        </form>
      </div>
    </div>
  );
}

export default Login;
