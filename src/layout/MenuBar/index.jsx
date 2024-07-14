import React from 'react'
import styles from "./style.module.scss";

const MenuBar = () => {
    return (
        <nav className={styles.menuBar}>
            <ul>
                <li><a href="#" id="myshopTag" className={styles.menubarTag}>MyShop</a></li>
                <li><a href="#" id="communityTag" className={styles.menubarTag}>Community</a></li>
                <li><a href="#" id="talkroomTag" className={styles.menubarTag}>TalkRoom</a></li>
                <li><a href="#" id="hogeTag" className={styles.menubarTag}>HogeHoge</a></li>
                <li><a href="#" id="fugaTag" className={styles.menubarTag}>FugaFuga</a></li>
            </ul>
        </nav>
    )
}

export default MenuBar;