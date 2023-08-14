export const menuFunctionality = () => {
    const menuItemHasChildrenArray = document.querySelectorAll(
        '.site-header__menu > .menu-item.menu-item-has-children'
    ) as NodeListOf<HTMLElement>;
    const siteHeader = document.querySelector('#site-header');

    const isMenuOverflowing = () => {
        const subMenu = document.querySelector('.menu-item-has-children.opened > .sub-menu') as HTMLElement;
        console.log(subMenu);

        const offset = 100;

        if (subMenu) {
            const subMenuRect = subMenu.getBoundingClientRect();
            const bodyRect = document.body.getBoundingClientRect();
            const overflowDistance = Math.floor(subMenuRect.right - bodyRect.right);

            if (overflowDistance > 0) {
                subMenu.style.left = `-${Math.floor(overflowDistance + offset)}px`;
            }
        }
    };

    function isHoverAvailable() {
        return window.matchMedia('(hover: hover)').matches;
    }

    function toggleSubMenuClass(operationType: string, menuItemHasChildren: HTMLElement) {
        menuItemHasChildren && menuItemHasChildren.classList[operationType]('opened');
        siteHeader && siteHeader.classList[operationType]('opened');
        if (operationType === 'add' || operationType === 'toggle') {
            isMenuOverflowing();
        }
    }

    menuItemHasChildrenArray &&
        menuItemHasChildrenArray.forEach((hasChildrenItem) => {
            if (isHoverAvailable()) {
                hasChildrenItem.addEventListener('mouseenter', () => toggleSubMenuClass('add', hasChildrenItem));

                hasChildrenItem.addEventListener('mouseleave', () => toggleSubMenuClass('remove', hasChildrenItem));
            } else {
                hasChildrenItem.addEventListener('click', () => toggleSubMenuClass('toggle', hasChildrenItem));
            }
        });
};

export const activateMobileMenu = () => {
    const addActiveItems = document.querySelectorAll('.js-toggle-active-menu') as NodeListOf<HTMLElement>;

    addActiveItems &&
        addActiveItems.forEach((item) => {
            item.classList.toggle('active');
        });

    document.body.classList.toggle('popup-opened');
};

export const footerMenuAction = () => {
    const footerMenuLink = document.querySelectorAll('.site-footer__menu .menu-title a');

    footerMenuLink &&
        footerMenuLink.forEach((link) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const parent = link.closest('.menu-title');
                parent && parent.classList.toggle('active');
            });
        });
};
