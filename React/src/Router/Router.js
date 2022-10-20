import React from 'react'
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Signin from '../pages/signin';
import Signup from '../pages/signup';
import Home from '../pages/home'
import Annonces from '../pages/annonces';
import Profile from '../pages/profile';
import Postuler from '../pages/postuler';
import Logout from '../pages/logout';


const Router = () => {
  return (
    <div>
    <BrowserRouter>
        <Routes>
            <Route path='/' element={<Home/>}/>
        </Routes>
        <Routes>
            <Route path="/admin"/>
            <Route path="/admin/dashboard"/>
        </Routes>
        <Routes>
            <Route path="/sign-up" element={<Signup/>}/>
        </Routes>
        <Routes>
            <Route path="/sign-in" element={<Signin/>}/>
        </Routes>
        <Routes>
            <Route path='/annonce' element={<Annonces/>}/>
        </Routes>
        <Routes>
            <Route path="/profile" element={<Profile/>}/>
        </Routes>
        <Routes>
            <Route path="/postuler" element={<Postuler/>}/>
        </Routes>
        <Routes>
            <Route path="/log-out" element={<Logout/>}/>
        </Routes>
    </BrowserRouter>
      
    </div>
  )
}

export default Router
