<?php

$wgCitizenGlobalToolsPortlet = 'p-Navigation';
$wgCitizenEnableCollapsibleSections = true;

$wgCitizenSearchGateway = 'mwActionApi';
$wgCitizenSearchDescriptionSource = 'pagedescription';

$wgCitizenMaxSearchResults = 10;

# Default to dark theme
$wgCitizenThemeDefault = 'dark';

# Add links to footer
$wgHooks['SkinAddFooterLinks'][] = static function ( $sk, $key, &$footerlinks ) {
    $rel = 'nofollow noreferrer noopener';

    if ( $key === 'places' ) {
        $footerlinks['cookiestatement'] = Html::element(
            'a',
            [
                'href' => $sk->msg( 'cookiestatementpage' )->escaped(),
                'title' => $sk->msg( 'cookiestatementpage' )->text()
            ],
            $sk->msg( 'cookiestatement' )->text()
        );
        $footerlinks['analytics'] = Html::element(
            'a',
            [
                'href' => 'https://analytics.star-citizen.wiki/share/star-citizen.wiki?auth=Bg-FxWU2kIBGG3kvvZTiP',
                'rel' => $rel
            ],
            $sk->msg( 'footer-analytics' )->text()
        );
        $footerlinks['statuspage'] = Html::element(
            'a',
            [
                'href' => 'https://status.star-citizen.wiki',
                'rel' => $rel
            ],
            $sk->msg( 'footer-statuspage' )->text()
        );
        $footerlinks['github'] = Html::element(
            'a',
            [
                'href' => 'https://github.com/StarCitizenWiki',
                'rel' => $rel
            ],
            $sk->msg( 'footer-github' )->text()
        );
        $footerlinks['api'] = Html::element(
            'a',
            [
                'href' => 'https://api.star-citizen.wiki',
                'rel' => $rel
            ],
            $sk->msg( 'footer-api' )->text()
        );
        $footerlinks['discord'] = Html::element(
            'a',
            [
                'href' => 'https://discord.star-citizen.wiki',
                'rel' => $rel
            ],
            $sk->msg( 'footer-discord' )->text()
        );
    }
};
