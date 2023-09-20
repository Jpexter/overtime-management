import React from 'react'
import { NavLink } from 'react-router-dom'

function Dashboard() {
  return (
    <div className='d-flex align-items-center justify-content-center'>
        <h1>Ini Adalah Halaman Dashboard</h1>
        <NavLink to={"/"}>Logout</NavLink>
    </div>
  )
}

export default Dashboard