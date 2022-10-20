import React from 'react';
import {Nav, NavLink, Bars, NavMenu, NavBtn, NavBtnLink} from './elemNavbar';
import Logo from '../images/logo.png'

const Navbar = () => {
  return (
    <>
    <Nav>
      <NavLink to="/">
        <img src={Logo} alt="logo"/>
      </NavLink>
      <Bars/>
      <NavMenu>
        <NavLink to="/annonce" activestyle>
          Créer une annonce
        </NavLink>
        <NavLink to="/profile" activestyle>
          Profile
        </NavLink>
        <NavLink to="/sign-in" activestyle>
          Sign In
        </NavLink>
        <NavLink to="/sign-up" activestyle>
          Sign Up
        </NavLink>
        <NavLink to="/log-out" activestyle>
          Log Out
        </NavLink>
      </NavMenu>
      <NavBtn>
      </NavBtn>
    </Nav>
    </>
  )
}

export default Navbar



