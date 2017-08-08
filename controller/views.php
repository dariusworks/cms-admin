<?php
/**
 *  This file was generated with crodas/SimpleView (https://github.com/crodas/SimpleView)
 *  Do not edit this file.
 *
 */

namespace {


    class base_template_da39a3ee5e6b4b0d3255bfef95601890afd80709
    {
        protected $parent;
        protected $child;
        protected $context;

        public function yield_parent($name, $args)
        {
            $method = "section_" . sha1($name);

            if (is_callable(array($this->parent, $method))) {
                $this->parent->$method(array_merge($this->context, $args));
                return true;
            }

            if ($this->parent) {
                return $this->parent->yield_parent($name, $args);
            }

            return false;
        }

        public function do_yield($name, Array $args = array())
        {
            if ($this->child) {
                // We have a children template, we are their base
                // so let's see if they have implemented by any change
                // this section
                if ($this->child->do_yield($name, $args)) {
                    // yes!
                    return true;
                }
            }

            // Do I have this section defined?
            $method = "section_" . sha1($name);
            if (is_callable(array($this, $method))) {
                // Yes!
                $this->$method(array_merge($this->context, $args));
                return true;
            }

            // No :-(
            return false;
        }

    }

    /** 
     *  Template class generated from download.tpl
     */
    class class_6d6f3e652b74f62b99837bb05a9b5e7decd43b9c extends base_template_da39a3ee5e6b4b0d3255bfef95601890afd80709
    {

        public function hasSection($name)
        {

            return false;
        }


        public function renderSection($name, Array $args = array(), $fail_on_missing = true)
        {
            if (!$this->hasSection($name)) {
                if ($fail_on_missing) {
                    throw new \RuntimeException("Cannot find section {$name}");
                }
                return "";
            }

        }

        public function enhanceException(Exception $e, $section = NULL)
        {
            if (!empty($e->enhanced)) {
                return;
            }

            $message = $e->getMessage() . "( IN " . 'download.tpl';
            if ($section) {
                $message .= " | section: {$section}";
            }
            $message .= ")";

            $object   = new ReflectionObject($e);
            $property = $object->getProperty('message');
            $property->setAccessible(true);
            $property->setValue($e, $message);

            $e->enhanced = true;
        }

        public function render(Array $vars = array(), $return = false)
        {
            try {
                return $this->_render($vars, $return);
            } catch (Exception $e) {
                if ($return) ob_get_clean();
                $this->enhanceException($e);
                throw $e;
            }
        }

        public function _render(Array $vars = array(), $return = false)
        {
            $this->context = $vars;

            extract($vars);
            if ($return) {
                ob_start();
            }

            echo "<hr>\n";
            foreach($files as $file) {

                $this->context['file'] = $file;
                echo "<div class=\"investors-pdf-block\">\n\t<a href=\"\" class=\"investors-pdf-download cms-asset-download\" data-id=\"";
                echo htmlentities($file->xid, ENT_QUOTES, 'UTF-8', false);
                echo "\">Download</a>\n";
                if (preg_match('/pdf/', $file->mime)) {
                    echo "\t    <div class=\"innametors-pdf-icon-bl\">\n";
                }
                else {
                    echo "\t    <div class=\"\">\n";
                }
                echo "\t\t    <div class=\"investors-pdf-title\">";
                echo htmlentities($file->name, ENT_QUOTES, 'UTF-8', false);
                echo "</div>\n\t\t    <div class=\"investors-pdf-date\">";
                echo htmlentities(date("d F Y"), ENT_QUOTES, 'UTF-8', false);
                echo "</div>\n\t    </div>\n</div>\n";
            }
            echo "<hr class=\"pdf-div\">\n";

            if ($return) {
                return ob_get_clean();
            }

        }
    }

    /** 
     *  Template class generated from helps.tpl
     */
    class class_1d3c8acd289176bb2205c2a338083714ddf769af extends base_template_da39a3ee5e6b4b0d3255bfef95601890afd80709
    {

        public function hasSection($name)
        {

            return false;
        }


        public function renderSection($name, Array $args = array(), $fail_on_missing = true)
        {
            if (!$this->hasSection($name)) {
                if ($fail_on_missing) {
                    throw new \RuntimeException("Cannot find section {$name}");
                }
                return "";
            }

        }

        public function enhanceException(Exception $e, $section = NULL)
        {
            if (!empty($e->enhanced)) {
                return;
            }

            $message = $e->getMessage() . "( IN " . 'helps.tpl';
            if ($section) {
                $message .= " | section: {$section}";
            }
            $message .= ")";

            $object   = new ReflectionObject($e);
            $property = $object->getProperty('message');
            $property->setAccessible(true);
            $property->setValue($e, $message);

            $e->enhanced = true;
        }

        public function render(Array $vars = array(), $return = false)
        {
            try {
                return $this->_render($vars, $return);
            } catch (Exception $e) {
                if ($return) ob_get_clean();
                $this->enhanceException($e);
                throw $e;
            }
        }

        public function _render(Array $vars = array(), $return = false)
        {
            $this->context = $vars;

            extract($vars);
            if ($return) {
                ob_start();
            }

            echo "  <div class=\"main-scroll-block\">\n   <div class=\"main-pad-block\">\n\n      <div class=\"dev-nw-gray-bg\">\n        <div class=\"dev-nw-gray\"></div>\n      </div>\n      \n      <div class=\"main-mid-pad new-bottom-pages help-nw\">\n         <div class=\"new-left-menu-block\">\n            <div class=\"new-left-menu-link home active\">\n              <div class=\"new-left-menu-icon help-icon help-home\">";
            echo htmlentities(_t('Home'), ENT_QUOTES, 'UTF-8', false);
            echo "</div>\n            </div> \n";
            foreach($data as $i => $help) {

                $this->context['i'] = $i;
                $this->context['help'] = $help;
                echo "            <div class=\"new-left-menu-link ";
                echo htmlentities($help->name(), ENT_QUOTES, 'UTF-8', false);
                echo "\">\n              <div class=\"new-left-menu-icon help-icon help-";
                echo htmlentities($help->name(), ENT_QUOTES, 'UTF-8', false);
                echo "\">";
                echo htmlentities(_t($help->title), ENT_QUOTES, 'UTF-8', false);
                echo "</div>\n            </div> \n";
            }
            echo "         </div>\n         \n         <div class=\"new-right-content-block home\">\n           <h1 class=\"help-home-header\">";
            echo htmlentities(_t('Welcome to the help centre'), ENT_QUOTES, 'UTF-8', false);
            echo "</h1>\n           <div class=\"blog-new-search\">\n                <input value=\"";
            echo htmlentities(_t('Search'), ENT_QUOTES, 'UTF-8', false);
            echo "\" class=\"help_search\"/>\n           </div>\n           <div class=\"blog-new-div\">\n              <div></div>\n           </div>\n           <div class=\"help-short-block\">\n            <div class=\"dev-short-block left\"> \n             <div class=\"new-affiliate-mid-header new-affiliate-bot-pad\"> \n                <span class=\"red\">";
            echo htmlentities(_t('Get support'), ENT_QUOTES, 'UTF-8', false);
            echo "</span> \n             </div> \n             <div class=\"help-text-block\"> \n                ";
            echo htmlentities(_t('If your question is not answered here, do not hesitate to contact us.'), ENT_QUOTES, 'UTF-8', false);
            echo "\n             </div> \n             <a href=\"mailto:support";
            echo "@" . "mega.co.nz\" class=\"dev-new-button\"> ";
            echo htmlentities(_t('Contact Support'), ENT_QUOTES, 'UTF-8', false);
            echo " </a> \n             <div class=\"clear\"></div> \n            </div>\n            <div class=\"dev-short-block right\"> \n             <div class=\"new-affiliate-mid-header new-affiliate-bot-pad\"> \n               <span class=\"red\">";
            echo htmlentities(_t('Popular Topics:'), ENT_QUOTES, 'UTF-8', false);
            echo "</span> \n             </div>  \n";
            foreach($data as $help) {

                $this->context['help'] = $help;
                if ($help->popularQuestion) {
                    echo "             <a href=\"#help/" . ($help->name()) . "\" class=\"help-listing\"> \n                ";
                    echo htmlentities(_t($help->popularQuestion), ENT_QUOTES, 'UTF-8', false);
                    echo "\n             </a><br>\n";
                }
            }
            echo "            </div>\n            <div class=\"clear\"></div>\n           </div>\n           <div class=\"blog-new-div\">\n              <div></div>\n           </div>\n           <div class=\"new-affiliate-mid-header new-affiliate-bot-pad\"> \n               <span class=\"red\">";
            echo htmlentities(_t('Categories'), ENT_QUOTES, 'UTF-8', false);
            echo "</span> \n           </div> \n           <div class=\"dev-short-block left help-nw-short-blocks\"> \n";
            $i = 1;
            $this->context['i'] = $i;
            foreach($data as $help) {

                $this->context['help'] = $help;
                if ($i++%2 == 1) {
                    echo "               <div class=\"help-block " . ($help->name()) . "\">\n                   <div class=\"help-short-icon ";
                    echo $help->name() . "\">\n                    ";
                    echo htmlentities(_t($help->title), ENT_QUOTES, 'UTF-8', false);
                    echo "\n                   </div>\n                   <div class=\"help-short-txt\">\n                   ";
                    echo _t($help->description) . "\n                   </div>\n               </div>\n";
                }
            }
            echo "           </div>\n           <div class=\"dev-short-block right help-nw-short-blocks\"> \n";
            $i = 1;
            $this->context['i'] = $i;
            foreach($data as $help) {

                $this->context['help'] = $help;
                if ($i++%2 == 0) {
                    echo "               <div class=\"help-block ";
                    echo htmlentities($help->name(), ENT_QUOTES, 'UTF-8', false);
                    echo "\">\n                   <div class=\"help-short-icon ";
                    echo htmlentities($help->name(), ENT_QUOTES, 'UTF-8', false);
                    echo "\">\n                    ";
                    echo htmlentities(_t($help->title), ENT_QUOTES, 'UTF-8', false);
                    echo "\n                   </div>\n                   <div class=\"help-short-txt\">\n                   ";
                    echo _t($help->description) . "\n                   </div>\n               </div>\n";
                }
            }
            echo "           </div>\n           <div class=\"clear\"></div>\n         </div>\n         \n         <div class=\"new-right-content-block help-info-pages hidden help2\">\n";
            foreach($data as $help) {

                $this->context['help'] = $help;
                echo "            <div id=\"section-";
                echo htmlentities($help->name(), ENT_QUOTES, 'UTF-8', false);
                echo "\" class=\"hidden sections\">\n                <h1 class=\"help-home-header\">Help Centre - <span class=\"red\">";
                echo htmlentities(_t($help->title), ENT_QUOTES, 'UTF-8', false);
                echo "</span></h1>\n\n";
                foreach($help->questions as $question) {

                    $this->context['question'] = $question;
                    echo "                    <h2>";
                    echo htmlentities($question->question, ENT_QUOTES, 'UTF-8', false);
                    echo "</h2>\n                    ";
                    echo $question->answer . "\n";
                }
                echo "            </div>\n";
            }
            echo "         </div>\n         \n         <div class=\"clear\"></div>\n      </div>\n      \n    \n      ((BOTTOM))\n    \n  </div>\n  </div>\n";

            if ($return) {
                return ob_get_clean();
            }

        }
    }

    /** 
     *  Template class generated from pages.tpl
     */
    class class_6a5e5f8f498d078d8af843c5e717fe8937fc0342 extends base_template_da39a3ee5e6b4b0d3255bfef95601890afd80709
    {

        public function hasSection($name)
        {

            return false;
        }


        public function renderSection($name, Array $args = array(), $fail_on_missing = true)
        {
            if (!$this->hasSection($name)) {
                if ($fail_on_missing) {
                    throw new \RuntimeException("Cannot find section {$name}");
                }
                return "";
            }

        }

        public function enhanceException(Exception $e, $section = NULL)
        {
            if (!empty($e->enhanced)) {
                return;
            }

            $message = $e->getMessage() . "( IN " . 'pages.tpl';
            if ($section) {
                $message .= " | section: {$section}";
            }
            $message .= ")";

            $object   = new ReflectionObject($e);
            $property = $object->getProperty('message');
            $property->setAccessible(true);
            $property->setValue($e, $message);

            $e->enhanced = true;
        }

        public function render(Array $vars = array(), $return = false)
        {
            try {
                return $this->_render($vars, $return);
            } catch (Exception $e) {
                if ($return) ob_get_clean();
                $this->enhanceException($e);
                throw $e;
            }
        }

        public function _render(Array $vars = array(), $return = false)
        {
            $this->context = $vars;

            extract($vars);
            if ($return) {
                ob_start();
            }

            echo "<div class=\"main-scroll-block\">\n   <div class=\"main-pad-block\">\n      \n          ((TOP))\n\n\t<div class=\"dev-nw-gray-bg\">\n\t\t<div class=\"dev-nw-gray\"></div>\n\t</div>\n\n<div class=\"main-mid-pad new-bottom-pages investors-nw on-boot\" data-js=\"corporate_boot\">\n  <div class=\"new-left-menu-block\" style=\"padding-top: 30px;\">\n";
            $e = 1;
            $this->context['e'] = $e;
            foreach($data as $page) {

                $this->context['page'] = $page;
                echo "    <div class=\"new-left-menu-link investors\" id=\"page-" . ($e++) . "\">\n      <div class=\"new-left-link-pad\">";
                echo htmlentities($page->title, ENT_QUOTES, 'UTF-8', false);
                echo "</div>\n    </div>\n";
            }
            echo "  </div>\n  \n";
            $e = 1;
            $this->context['e'] = $e;
            foreach($data as $page) {

                $this->context['page'] = $page;
                echo "  <div class=\"new-right-content-block page-" . ($e++) . " hidden\">\n    <h1>";
                echo htmlentities($page->title, ENT_QUOTES, 'UTF-8', false);
                echo "</h1>\n    ";
                echo $page->getHtml() . "\n  </div>\n";
            }
            echo "  \n  <div class=\"clear\"></div>\n</div>\n\n      ((BOTTOM))\n\t</div>\n</div>\n";

            if ($return) {
                return ob_get_clean();
            }

        }
    }

    /** 
     *  Template class generated from team.tpl
     */
    class class_0e16e419c216396a6321b6d130a2a299ad7ea164 extends base_template_da39a3ee5e6b4b0d3255bfef95601890afd80709
    {

        public function hasSection($name)
        {

            return false;
        }


        public function renderSection($name, Array $args = array(), $fail_on_missing = true)
        {
            if (!$this->hasSection($name)) {
                if ($fail_on_missing) {
                    throw new \RuntimeException("Cannot find section {$name}");
                }
                return "";
            }

        }

        public function enhanceException(Exception $e, $section = NULL)
        {
            if (!empty($e->enhanced)) {
                return;
            }

            $message = $e->getMessage() . "( IN " . 'team.tpl';
            if ($section) {
                $message .= " | section: {$section}";
            }
            $message .= ")";

            $object   = new ReflectionObject($e);
            $property = $object->getProperty('message');
            $property->setAccessible(true);
            $property->setValue($e, $message);

            $e->enhanced = true;
        }

        public function render(Array $vars = array(), $return = false)
        {
            try {
                return $this->_render($vars, $return);
            } catch (Exception $e) {
                if ($return) ob_get_clean();
                $this->enhanceException($e);
                throw $e;
            }
        }

        public function _render(Array $vars = array(), $return = false)
        {
            $this->context = $vars;

            extract($vars);
            if ($return) {
                ob_start();
            }

            foreach($members as $user) {

                $this->context['user'] = $user;
                echo "    <div class=\"team-person-block\">\n      <div class=\"team-person-avatar\">\n       <img alt=\"\" src=\"{cmspath}/unsigned/";
                echo htmlentities($user['avatar'], ENT_QUOTES, 'UTF-8', false);
                echo "\" />\n      </div>\n      <div class=\"team-person-name\">\n        ";
                echo htmlentities($user['name'], ENT_QUOTES, 'UTF-8', false);
                echo "\n      </div>\n      <div class=\"team-person-occupation\">\n        ";
                echo htmlentities($user['role'], ENT_QUOTES, 'UTF-8', false);
                echo "\n      </div>\n      <div class=\"team-social-bl\">\n";
                if ($user['twitter']) {
                    echo "         <a href=\"";
                    echo htmlentities($user['twitter'], ENT_QUOTES, 'UTF-8', false);
                    echo "\" target=\"_blank\" rel=\"noreferrer\" class=\"team-social-icon twitter\"></a>\n";
                }
                else {
                    echo "         <a href=\"\" target=\"_blank\" rel=\"noreferrer\" class=\"team-social-icon twitter hidden\"></a>\n";
                }
                if ($user['linkedin']) {
                    echo "         <a href=\"";
                    echo htmlentities($user['linkedin'], ENT_QUOTES, 'UTF-8', false);
                    echo "\" target=\"_blank\" rel=\"noreferrer\" class=\"team-social-icon linkedin\"></a>\n";
                }
                else {
                    echo "         <a href=\"\" target=\"_blank\" rel=\"noreferrer\" class=\"team-social-icon linkedin hidden\"></a>\n";
                }
                echo "      </div>\n    </div>\n";
            }

            if ($return) {
                return ob_get_clean();
            }

        }
    }

}

namespace  {


    class Templates
    {
        public static function getAll()
        {
            return array (
                0 => 'download',
                1 => 'helps',
                2 => 'pages',
                3 => 'team',
            );
        }

        public static function getAllSections($name, $fail = true)
        {
            switch ($name) {
            default:
                if ($fail) {
                    throw new \RuntimeException("Cannot find section {$name}");
                }

                return array();
            }
        }

        public static function exec($name, Array $context = array(), Array $global = array())
        {
            $tpl = self::get($name);
            return $tpl->render(array_merge($global, $context));
        }

        public static function get($name, Array $context = array())
        {
            static $classes = array (
                'download.tpl' => 'class_6d6f3e652b74f62b99837bb05a9b5e7decd43b9c',
                'download' => 'class_6d6f3e652b74f62b99837bb05a9b5e7decd43b9c',
                'helps.tpl' => 'class_1d3c8acd289176bb2205c2a338083714ddf769af',
                'helps' => 'class_1d3c8acd289176bb2205c2a338083714ddf769af',
                'pages.tpl' => 'class_6a5e5f8f498d078d8af843c5e717fe8937fc0342',
                'pages' => 'class_6a5e5f8f498d078d8af843c5e717fe8937fc0342',
                'team.tpl' => 'class_0e16e419c216396a6321b6d130a2a299ad7ea164',
                'team' => 'class_0e16e419c216396a6321b6d130a2a299ad7ea164',
            );
            $name = strtolower($name);
            if (empty($classes[$name])) {
                throw new \RuntimeException("Cannot find template $name");
            }

            $class = "\\" . $classes[$name];
            return new $class;
        }
    }

}
