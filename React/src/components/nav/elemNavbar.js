import styled from 'styled-components'
import { NavLink as Link } from 'react-router-dom'
import {FaBars} from 'react-icons/fa'

export const Nav = styled.nav`
    height:50px;
   
    top: 2%;
    display: flex;
    justify-content: space-between;
    padding:0.5em calc((100vw-1000px)/2);
    z-index: 10;
    
`;
export const NavLink = styled(Link)`
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;
    padding: 0 2rem;
    height: 100%;
    cursor: pointer;

    &.active{
        color:rgba(48, 83, 207, 1);
    }
`;
export const Bars = styled(FaBars)`
    display: none;
    color: #fff;

    @media screen and (max-width: 768px){
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        transform translated(-100%, 75%);
        font-size: 1.8rem;
        cursor: pointer;
    }
`;
export const NavMenu = styled.div`
    background: rgba(113, 134, 208, 0.7);
    border-radius:30px;
    display: flex;
    align-items: center;
    margin-right: -24px;
    backdrop-filter: blur(5px);

    @media screen and (max-width: 768px){
        display: none;
    }

`;
export const NavBtn = styled.nav`
    display: flex;
    align-items: center;
    margin-right: 24px;

    @media screen and (max-width: 768px){
        display: none
    }
`;

export const NavBtnLink = styled(Link)`
    border-radius: 30px;
    background: #256ce1;
    padding: 12px 25px;
    color: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    texxt-decoration: none;
    
    &:hover{
        transition: all 0.2s ease-in-out;
        background: #fff;
        color: #010606;
    }
`;

