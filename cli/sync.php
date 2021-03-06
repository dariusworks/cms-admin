<?php

use Seld\JsonLint\JsonParser;

$GLOBALS['data'] = '[{
        "name":"CentOS 7.0",
        "64":"CentOS_7/x86_64/megasync-CentOS_7.x86_64.rpm",
        "64n":"CentOS_7/x86_64/nautilus-megasync-CentOS_7.x86_64.rpm",
        "c":"sudo yum localinstall"
    },
    {
        "name":"Debian 7.0",
        "32":"Debian_7.0/i386/megasync-Debian_7.0_i386.deb",
        "32n":"Debian_7.0/i386/nautilus-megasync-Debian_7.0_i386.deb",
        "64":"Debian_7.0/amd64/megasync-Debian_7.0_amd64.deb",
        "64n":"Debian_7.0/amd64/nautilus-megasync-Debian_7.0_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"Debian 8.0",
        "32":"Debian_8.0/i386/megasync-Debian_8.0_i386.deb",
        "32n":"Debian_8.0/i386/nautilus-megasync-Debian_8.0_i386.deb",
        "64":"Debian_8.0/amd64/megasync-Debian_8.0_amd64.deb",
        "64n":"Debian_8.0/amd64/nautilus-megasync-Debian_8.0_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"elementary OS Freya",
        "32":"xUbuntu_14.04/i386/megasync-xUbuntu_14.04_i386.deb",
        "32n":"xUbuntu_14.04/i386/nautilus-megasync-xUbuntu_14.04_i386.deb",
        "64":"xUbuntu_14.04/amd64/megasync-xUbuntu_14.04_amd64.deb",
        "64n":"xUbuntu_14.04/amd64/nautilus-megasync-xUbuntu_14.04_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"Fedora 19",
        "32":"Fedora_19/i686/megasync-Fedora_19.i686.rpm",
        "32n":"Fedora_19/i686/nautilus-megasync-Fedora_19.i686.rpm",
        "64":"Fedora_19/x86_64/megasync-Fedora_19.x86_64.rpm",
        "64n":"Fedora_19/x86_64/nautilus-megasync-Fedora_19.x86_64.rpm",
        "c":"sudo yum localinstall"
    },
    {
        "name":"Fedora 20",
        "32":"Fedora_20/i686/megasync-Fedora_20.i686.rpm",
        "32n":"Fedora_20/i686/nautilus-megasync-Fedora_20.i686.rpm",
        "64":"Fedora_20/x86_64/megasync-Fedora_20.x86_64.rpm",
        "64n":"Fedora_20/x86_64/nautilus-megasync-Fedora_20.x86_64.rpm",
        "c":"sudo yum localinstall"
    },
    {
        "name":"Fedora 21",
        "32":"Fedora_21/i686/megasync-Fedora_21.i686.rpm",
        "32n":"Fedora_21/i686/nautilus-megasync-Fedora_21.i686.rpm",
        "64":"Fedora_21/x86_64/megasync-Fedora_21.x86_64.rpm",
        "64n":"Fedora_21/x86_64/nautilus-megasync-Fedora_21.x86_64.rpm",
        "c":"sudo yum localinstall"
    },
    {
        "name":"Fedora 22",
        "32":"Fedora_22/i686/megasync-Fedora_22.i686.rpm",
        "32n":"Fedora_22/i686/nautilus-megasync-Fedora_22.i686.rpm",
        "64":"Fedora_22/x86_64/megasync-Fedora_22.x86_64.rpm",
        "64n":"Fedora_22/x86_64/nautilus-megasync-Fedora_22.x86_64.rpm",
        "c":"sudo dnf install"
    },
    {
        "name":"Fedora 23",
        "32":"Fedora_23/i686/megasync-Fedora_23.i686.rpm",
        "32n":"Fedora_23/i686/nautilus-megasync-Fedora_23.i686.rpm",
        "64":"Fedora_23/x86_64/megasync-Fedora_23.x86_64.rpm",
        "64n":"Fedora_23/x86_64/nautilus-megasync-Fedora_23.x86_64.rpm",
        "c":"sudo dnf install"
    },

    {
        "name":"Mint 17",
        "32":"xUbuntu_14.04/i386/megasync-xUbuntu_14.04_i386.deb",
        "32n":"xUbuntu_14.04/i386/nautilus-megasync-xUbuntu_14.04_i386.deb",
        "64":"xUbuntu_14.04/amd64/megasync-xUbuntu_14.04_amd64.deb",
        "64n":"xUbuntu_14.04/amd64/nautilus-megasync-xUbuntu_14.04_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"openSUSE 12.2",
        "32":"openSUSE_12.2/i586/megasync-openSUSE_12.2.i586.rpm",
        "32n":"openSUSE_12.2/i586/nautilus-megasync-openSUSE_12.2.i586.rpm",
        "64":"openSUSE_12.2/x86_64/megasync-openSUSE_12.2.x86_64.rpm",
        "64n":"openSUSE_12.2/x86_64/nautilus-megasync-openSUSE_12.2.x86_64.rpm",
        "c":"sudo zypper in"
    },
    {
        "name":"openSUSE 12.3",
        "32":"openSUSE_12.3/i586/megasync-openSUSE_12.3.i586.rpm",
        "32n":"openSUSE_12.3/i586/nautilus-megasync-openSUSE_12.3.i586.rpm",
        "64":"openSUSE_12.3/x86_64/megasync-openSUSE_12.3.x86_64.rpm",
        "64n":"openSUSE_12.3/x86_64/nautilus-megasync-openSUSE_12.3.x86_64.rpm",
        "c":"sudo zypper in"
    },
    {
        "name":"openSUSE 13.1",
        "32":"openSUSE_13.1/i586/megasync-openSUSE_13.1.i586.rpm",
        "32n":"openSUSE_13.1/i586/nautilus-megasync-openSUSE_13.1.i586.rpm",
        "64":"openSUSE_13.1/x86_64/megasync-openSUSE_13.1.x86_64.rpm",
        "64n":"openSUSE_13.1/x86_64/nautilus-megasync-openSUSE_13.1.x86_64.rpm",
        "c":"sudo zypper in"
    },
    {
        "name":"openSUSE 13.2",
        "32":"openSUSE_13.2/i586/megasync-openSUSE_13.2.i586.rpm",
        "32n":"openSUSE_13.2/i586/nautilus-megasync-openSUSE_13.2.i586.rpm",
        "64":"openSUSE_13.2/x86_64/megasync-openSUSE_13.2.x86_64.rpm",
        "64n":"openSUSE_13.2/x86_64/nautilus-megasync-openSUSE_13.2.x86_64.rpm",
        "c":"sudo zypper in"
    },
    {
        "name":"openSUSE Leap 42.1",
        "64":"openSUSE_Leap_42.1/x86_64/megasync-openSUSE_Leap_42.1.x86_64.rpm",
        "64n":"openSUSE_Leap_42.1/x86_64/nautilus-megasync-openSUSE_Leap_42.1.x86_64.rpm",
        "c":"sudo zypper in"
    },
    {
        "name":"Red Hat 7",
        "64":"RHEL_7/x86_64/megasync-RHEL_7.x86_64.rpm",
        "64n":"RHEL_7/x86_64/nautilus-megasync-RHEL_7.x86_64.rpm",
        "c":"sudo yum localinstall"
    },
    {
        "name":"Ubuntu 12.04",
        "32":"xUbuntu_12.04/i386/megasync-xUbuntu_12.04_i386.deb",
        "32n":"xUbuntu_12.04/i386/nautilus-megasync-xUbuntu_12.04_i386.deb",
        "64":"xUbuntu_12.04/amd64/megasync-xUbuntu_12.04_amd64.deb",
        "64n":"xUbuntu_12.04/amd64/nautilus-megasync-xUbuntu_12.04_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"Ubuntu 12.10",
        "32":"xUbuntu_12.10/i386/megasync-xUbuntu_12.10_i386.deb",
        "32n":"xUbuntu_12.10/i386/nautilus-megasync-xUbuntu_12.10_i386.deb",
        "64":"xUbuntu_12.10/amd64/megasync-xUbuntu_12.10_amd64.deb",
        "64n":"xUbuntu_12.10/amd64/nautilus-megasync-xUbuntu_12.10_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"Ubuntu 13.10",
        "32":"xUbuntu_13.10/i386/megasync-xUbuntu_13.10_i386.deb",
        "32n":"xUbuntu_13.10/i386/nautilus-megasync-xUbuntu_13.10_i386.deb",
        "64":"xUbuntu_13.10/amd64/megasync-xUbuntu_13.10_amd64.deb",
        "64n":"xUbuntu_13.10/amd64/nautilus-megasync-xUbuntu_13.10_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"Ubuntu 14.04",
        "32":"xUbuntu_14.04/i386/megasync-xUbuntu_14.04_i386.deb",
        "32n":"xUbuntu_14.04/i386/nautilus-megasync-xUbuntu_14.04_i386.deb",
        "64":"xUbuntu_14.04/amd64/megasync-xUbuntu_14.04_amd64.deb",
        "64n":"xUbuntu_14.04/amd64/nautilus-megasync-xUbuntu_14.04_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"Ubuntu 14.10",
        "32":"xUbuntu_14.10/i386/megasync-xUbuntu_14.10_i386.deb",
        "32n":"xUbuntu_14.10/i386/nautilus-megasync-xUbuntu_14.10_i386.deb",
        "64":"xUbuntu_14.10/amd64/megasync-xUbuntu_14.10_amd64.deb",
        "64n":"xUbuntu_14.10/amd64/nautilus-megasync-xUbuntu_14.10_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"Ubuntu 15.04",
        "32":"xUbuntu_15.04/i386/megasync-xUbuntu_15.04_i386.deb",
        "32n":"xUbuntu_15.04/i386/nautilus-megasync-xUbuntu_15.04_i386.deb",
        "64":"xUbuntu_15.04/amd64/megasync-xUbuntu_15.04_amd64.deb",
        "64n":"xUbuntu_15.04/amd64/nautilus-megasync-xUbuntu_15.04_amd64.deb",
        "c":"sudo gdebi"
    },
    {
        "name":"Ubuntu 15.10",
        "32":"xUbuntu_15.10/i386/megasync-xUbuntu_15.10_i386.deb",
        "32n":"xUbuntu_15.10/i386/nautilus-megasync-xUbuntu_15.10_i386.deb",
        "64":"xUbuntu_15.10/amd64/megasync-xUbuntu_15.10_amd64.deb",
        "64n":"xUbuntu_15.10/amd64/nautilus-megasync-xUbuntu_15.10_amd64.deb",
        "c":"sudo gdebi"
    }]';

/**
 *  @Cli("import:sync")
 */
function sync()
{
    global $mongoDb, $data;
    
    Model::setCurrentUser($mongoDb->users->findOne());
    $parser = new JsonParser();
    $parser->lint($data);
    $mongoDb->sync_releases->drop();
    foreach ($parser->parse($data) as $row) {
        $r = new SyncRelease;
        $r->os = $row->name;
        $r->url64 = $row->{'64'};
        $r->url32 = $row->{'32'};
        $r->url64n = $row->{'64n'};
        $r->url32n = $row->{'32n'};
        $r->helpText = $row->c;
        $mongoDb->save($r);
    }
}
