<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$items = array(
    'mautic.asset.asset.menu.root' => array(
        'linkAttributes' => array(
            'id' => 'mautic_asset_root'
        ),
        'extras'=> array(
            'iconClass' => 'fa-folder-open-o'
        ),
        'display' => ($security->isGranted(array('asset:assets:viewown', 'asset:assets:viewother'), 'MATCH_ONE')) ? true : false,
        'children' => array(
            'mautic.asset.asset.menu.index' => array(
                'route'    => 'mautic_asset_index',
                'linkAttributes' => array(
                    'data-toggle' => 'ajax'
                ),
                'extras'=> array(
                    'routeName' => 'mautic_asset_index'
                ),
            ),
            'mautic.asset.asset.menu.new' => array(
                'route'    => 'mautic_asset_action',
                'routeParameters' => array("objectAction"  => "new"),
                'extras'  => array(
                    'routeName' => 'mautic_asset_action|new'
                ),
                'display' => false //only used for breadcrumb generation
            ),
            'mautic.asset.asset.menu.edit' => array(
                'route'           => 'mautic_asset_action',
                'routeParameters' => array("objectAction"  => "edit"),
                'extras'  => array(
                    'routeName' => 'mautic_asset_action|edit'
                ),
                'display' => false //only used for breadcrumb generation
            ),
            'mautic.asset.asset.menu.view' => array(
                'route'           => 'mautic_asset_action',
                'routeParameters' => array("objectAction"  => "view"),
                'extras'  => array(
                    'routeName' => 'mautic_asset_action|view'
                ),
                'display' => false //only used for breadcrumb generation
            ),
            'mautic.asset.category.menu.index' => array(
                'route'    => 'mautic_assetcategory_index',
                'extras'  => array(
                    'routeName' => 'mautic_assetcategory_index'
                ),
                'linkAttributes' => array(
                    'data-toggle' => 'ajax'
                ),
                'display' => $security->isGranted('asset:categories:view') ? true : false,
                'children' => array(
                    'mautic.asset.category.menu.new' => array(
                        'route'    => 'mautic_assetcategory_action',
                        'routeParameters' => array("objectAction"  => "new"),
                        'extras'  => array(
                            'routeName' => 'mautic_assetcategory_action|new'
                        ),
                        'display' => false //only used for breadcrumb generation
                    ),
                    'mautic.asset.category.menu.edit' => array(
                        'route'           => 'mautic_assetcategory_action',
                        'routeParameters' => array("objectAction"  => "edit"),
                        'extras'  => array(
                            'routeName' => 'mautic_assetcategory_action|edit'
                        ),
                        'display' => false //only used for breadcrumb generation
                    )
                )
            )
        )
    )
);

return $items;