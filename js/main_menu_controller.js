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
    				elementClass = ' class="selected"'
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

    	var subMenuItems = subMenu.children();

		var height = subMenuItems.outerHeight() * subMenuItems.length;
		var isShown = false;
		var hideTimerId = null;

		this.show = function () {

			if (isShown)
				return;

			isShown = true;

			if (hideTimerId) {
				subMenu.removeClass('pending_hide');
				clearTimeout(hideTimerId);
				hideTimerId = null;
				return;
			}

			$('.pending_hide').each(function (_, element) {
				new SubMenu($(element)).hideSubMenu(true);
			});

			subMenu
    			.height(0)
    			.animate({ height: height }, 300, function () {
    				subMenu.removeClass('sub_menu_hidden');
    				subMenu.height('');
    			});

    		subMenu.parent().addClass('highlighted');
		};

		this.hideSubMenu = function (clear) {

			if (clear)
				clearTimeout(hideTimerId);

	    	hideTimerId = null;

			subMenu.removeClass('pending_hide');
    		subMenu.parent().removeClass('highlighted');

			if (subMenu.parent().closest('.sub_menu.pending_hide').length)
				return;

			subMenu.animate({ opacity: 0 }, 100, function () {
				subMenu.addClass('sub_menu_hidden');
				$('.sub_menu', subMenu).addClass('sub_menu_hidden');
				subMenu.css('opacity', '');
			});
		};

		this.hide = function () {

			if (!isShown)
				return;

			isShown = false;

			subMenu.addClass('pending_hide');

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

    		if (!subMenu.length)
    			return;

    		new SubMenu(subMenu).show();
    	})
    	.on('mouseleave', 'li', function () {

    		var subMenu = $(this).children('.sub_menu');

    		if (subMenu.length)
    			new SubMenu(subMenu).hide();
    	});
});