import {Routes, Route} from "react-router-dom"
import Login from "./Pages/Login"
import Dashboard from "./Pages/Dashboard"

function App() {
  return <div>
          <Routes>
            <Route path="/" Component={Login} />
            <Route path="/dashboard" Component={Dashboard} />
          </Routes>
        </div>
}

export default App
