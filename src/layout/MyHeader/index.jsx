import React from 'react'
import { Link } from 'react-router-dom';
import styles from "./style.module.scss";
import logo from "../../images/garden_logo_orkney_font_fixed.png";
import icon from "../../images/default_profile_image.png";

const MyHeader = ({ toggleMenu }) => {
    return (
        <header>
            <div className={styles.headerLeft}>
                <Link to="/mypage">
                    <img src={logo} alt="" />
                </Link>
            </div>
            <div className={styles.headerRight} id="weather">
                <button onClick={toggleMenu}>
                    <img src={icon} alt="" />
                </button>
            </div>
        </header>
    )
}

export default MyHeader;