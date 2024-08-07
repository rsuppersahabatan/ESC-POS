# ESC-POS-CODEIGNITER

ORIGINAL FROM:
https://github.com/mike42/escpos-php/tree/master

STEP:
1. Download all files in this github or the source
2. Put the folder of all Mike42 to third_party
3. Create File in libraries folder, with EscPos.php
4. And run!

Example:

~~~PHP
try {
    // Enter the device file for your USB printer here
    // You can check the tutorial here: https://mike42.me/blog/2015-03-getting-a-usb-receipt-printer-working-on-linux
    $connector = new FilePrintConnector("/dev/usb/lp0");
    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
    $printer -> text("Hello World!\n");
    $printer -> cut();
    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}
~~~

More: https://mike42.me/blog/2015-03-getting-a-usb-receipt-printer-working-on-linux

Notes: 
1. Login as Root
2. Write: chown -R user:user /dev/usb
3. As alternatif if, sudo usermod -a -G lp user NOT WORKING!

This Is in Codeigniter!
~~~PHP
$this->load->library("EscPos.php");

try {
		// Enter the device file for your USB printer here
	  $connector = new Escpos\PrintConnectors\FilePrintConnector("/dev/usb/lp0");
		   
		/* Print a "Hello world" receipt" */
		$printer = new Escpos\Printer($connector);
		$printer -> text("Hello World!\n");
		$printer -> cut();

		/* Close printer */
		$printer -> close();
} catch (Exception $e) {
	echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}
~~~

## Star History

[![Star History Chart](https://api.star-history.com/svg?repos=rsuppersahabatan/ESC-POS&type=Date)](https://star-history.com/#rsuppersahabatan/ESC-POS&Date)


## [![Repography logo](https://images.repography.com/logo.svg)](https://repography.com) / Top contributors
[![Top contributors](https://images.repography.com/53549288/rsuppersahabatan/ESC-POS/top-contributors/H4IOSPEOE5t_kJczUIUk9OyEIaKlh538YAXm8ybCFFQ/z-9ludcu-oFzMgVTq8gsyX81B877T7rb1Ou1hJ1B4wY_table.svg)](https://github.com/rsuppersahabatan/ESC-POS/graphs/contributors)


Done!

More info: topidesta.wordpress.com
