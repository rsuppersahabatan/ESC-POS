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

Done!

More info: topidesta.wordpress.com
