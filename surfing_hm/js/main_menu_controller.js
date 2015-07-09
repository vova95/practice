$(function () {

    var findMenuItem = function (name, menu) {
        
        menu = menu || window.mainMenu;

        for (var i = menu.length - 1; i >= 0; i--) {

            if (menu[i].name === name)
                return menu[i];

            if (menu[i].sub) {
                var subItem = findMenuItem(name, menu[i].sub)

                if (subItem)
                    return subItem;
            }
        };
    };

    var contains = function (containerName, containedName) {
        var container = findMenuItem(containerName);

        return !!findMenuItem(containedName, container.sub || []);
    };

    var getSelectMenuHtml = function (menu, level) {

        var html = '';
        var prefix = new Array(level).join('-');

        menu.forEach(function (menuItem) {

            var selected = '';

            if (menuItem.name === window.selectedMenu) {
                selected = ' selected="selected"';
            }

            html += '<option' + selected + '>' + prefix + menuItem.name + '</option>';

            if (menuItem.sub)
                html += getSelectMenuHtml(menuItem.sub, level + 1);
        });

        return html;
    };

    var selectMenuHtml = '<select class="select_menu">' + getSelectMenuHtml(window.mainMenu, 1) + '</select>';

    $('.select_menu_tel').html(selectMenuHtml);
    $('.select_menu').change(function () {

        var name = $(this).children(":selected").text();

        window.location.href = findMenuItem(name).href;
    });

    var getListMenuHtml = function (menu, className) {
        
        var ulClass = className === 'sub_menu' ? (className + ' sub_menu_hidden') : className;
        var html = '<ul class="' + ulClass + '">';

        menu.forEach(function (menuItem) {

            var elementClass = '';

            if (className !== 'sub_menu') {
                if (menuItem.name === window.selectedMenu || contains(menuItem.name, window.selectedMenu))
                    elementClass = ' class="menu_item_selected"'
                else if (!menuItem.sub)
                    elementClass = ' class="without_sub_menu"';
            }

            html += '<li' + elementClass + '><a href="' + (menuItem.href || '#') + '">' + menuItem.name + '</a>';

            if (menuItem.sub)
                html += getListMenuHtml(menuItem.sub, 'sub_menu');

            html += '</li>';
        });

        return html + '</ul>';
    };

    var SubMenu = function (subMenu) {

        var propName = 'subMenu';

        if (subMenu.prop(propName))
            return subMenu.prop(propName);

        var isShown = false;
        var hideTimerId = null;

        var removeTimer = function () {
            subMenu.removeClass('sub_menu_pending_hide');
            clearTimeout(hideTimerId);
        };

        subMenu.on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function () {

            if (subMenu.hasClass('sub_menu_showing'))
                subMenu
                    .removeClass('sub_menu_showing')
                    .addClass('sub_menu_shown');
            else if (subMenu.hasClass('sub_menu_hiding'))
                subMenu
                    .removeClass('sub_menu_hiding')
                    .addClass('sub_menu_hidden');
        });

        var hidePendingSubMenus = function () {
            $('.sub_menu_pending_hide').each(function (_, element) {
                if (element !== subMenu[0])
                    new SubMenu($(element)).hideSubMenu();
            });
        };

        this.show = function () {

            if (isShown)
                return;

            isShown = true;

            removeTimer();
            hidePendingSubMenus();

            subMenu
                .removeClass('sub_menu_hiding')
                .removeClass('sub_menu_hidden')
                .addClass('sub_menu_showing');

            subMenu.parent().addClass('menu_item_highlighted');
        };

        this.hideSubMenu = function () {

            removeTimer();

            subMenu
                .removeClass('sub_menu_showing')
                .removeClass('sub_menu_shown')
                .addClass('sub_menu_hiding');

            subMenu.parent().removeClass('menu_item_highlighted');
        };

        this.hide = function () {

            if (!isShown)
                return;

            isShown = false;

            subMenu.addClass('sub_menu_pending_hide');

            var that = this;

            hideTimerId = setTimeout(function () {
                that.hideSubMenu();
            }, 1000);
        };

        subMenu.prop(propName, this);
    };

    $('.news_buttons')
        .html(getListMenuHtml(window.mainMenu, 'navigation'))
        .on('mouseover', 'li', function () {
            
            var subMenu = $(this).children('.sub_menu');

            if (subMenu.length)
                new SubMenu(subMenu).show();
        })
        .on('mouseleave', 'li', function () {

            var subMenu = $(this).children('.sub_menu');

            if (subMenu.length)
                new SubMenu(subMenu).hide();
        });
});