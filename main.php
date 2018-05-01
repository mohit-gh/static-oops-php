<?php

	class foo {

		static function hello() {
			return 'Hello World';
		}
	}

echo foo::hello();

Output : Hello World

<?php

	class foo {

		public static $name = 'Mohit';

		static function hello($var) {
			return $var;
		}
	}


echo foo::$name;

Output : Mohit
