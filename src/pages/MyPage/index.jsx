import React, { useState, useEffect } from 'react'
import styles from "./style.module.scss";
import Container from '../../layout/Container';
import MenuBar from '../../layout/MenuBar';
import MyHeader from '../../layout/MyHeader';
import DownMenu from '../../components/DownMenu';

const MyPage = () => {
    const [isMenuVisible, setMenuVisible] = useState(false);

    const toggleMenu = () => {
        console.log('Toggle Menu clicked');
        setMenuVisible(!isMenuVisible);
        console.log('Menu visibility:', !isMenuVisible);
    };

    return (
        <>
            <Container />
            <MyHeader toggleMenu={toggleMenu}  />
            <MenuBar />
            <div className={styles.topContainer}>
                <DownMenu isMenuVisible={isMenuVisible} toggleMenu={toggleMenu} />
            </div>
        </>
    )
}

export default MyPage;