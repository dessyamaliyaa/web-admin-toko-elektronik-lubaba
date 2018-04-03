-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 08, 2017 at 10:56 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `proyek`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `produk`
-- 

CREATE TABLE `produk` (
  `id` int(7) NOT NULL auto_increment,
  `nama` varchar(50) collate latin1_general_ci default NULL,
  `kategori` varchar(15) collate latin1_general_ci default NULL,
  `gambar` varchar(200) collate latin1_general_ci default NULL,
  `spek` text collate latin1_general_ci,
  `harga` varchar(25) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `produk`
-- 

INSERT INTO `produk` VALUES (11, 'Oppo A37', 'Mobile', '05042017003419201606301845576884.jpg', 'Height :143.1 mm \r\nWidth :71 mm \r\nThickness :7.68 mm \r\nWeight :136 g \r\nColor :Gold, Rose gold \r\nOperating System :ColorOS 3.0, based on Android 5.1 \r\nGPU :Adreno A306 \r\nRAM :2GB \r\nStorage :16GB (Expandable up to 128GB) \r\nBattery :Typical Capacity: 2630 mAh (Non-removable) \r\nProcessor :MSM 8916 Quad-core 1.2GHz \r\nSize :5.0 inches \r\nType :IPS TFT \r\nResolution :HD (1280 by 720 pixels) \r\nColors :16 million colors \r\nTouchscreen :Multi-touch, Capacitive Screen, Gorilla Glass 4\r\nSupport for Gloved and Wet Touch Input \r\nCamera Rear Sensor :8-megapixel \r\nCamera Front Sensor :5-megapixel \r\nCamera Flash :LED Flash \r\nAperture :Rear: f/2.2\r\nFront: f/2.4 \r\nFrequencies :GSM: Band 2/3/5/8 WCDMA: Band 1/5/8 FDD-LTE: Band 1/3/8 \r\nSIM Card Type :Dual Nano-SIM Cards \r\nGPS :Supported \r\nBluetooth :4.0 \r\nWi-Fi :2.4GHz 802.11 b/g/n \r\nOTG :Support \r\nNFC :No ', '1999000');
INSERT INTO `produk` VALUES (10, 'ASUS Chromebook C202SA', 'PC', '04042017192846201604AM060000090_14598968477160610096485.jpg', 'Screen Size: 11.6 inches \r\nScreen Resolution: 1366 x 768 pixels \r\nMax Screen Resolution: 1366*768 pixels \r\nProcessor: 1.6 GHz Intel Celeron \r\nRAM: 4 GB LPDDR3-SDRAM \r\nHard Drive: 16 GB emmc \r\nGraphics Coprocessor: Intel HD Graphics \r\nCard Description integrated \r\nWireless Type: 802.11 A/C \r\nNumber of USB 3.0 Ports: 2 \r\nAverage Battery Life (in hours):10 hours ', '3420000');
INSERT INTO `produk` VALUES (12, 'Samsung Level U Pro', 'Accesories', '0504201700450802042017022035headphone_collage.png', 'Bluetooth Profiles : Advanced Audio Distribution Profile (A2DP), Audio/Video Remote Control Profile (AVRCP), Hands Free Profile (HFP), Headset Profile (HSP) \r\nBattery Type : headphone battery \r\nRechargeable Battery : rechargeable \r\nCapacity : 200 mAh \r\nConnectivity Technology : wireless \r\nWireless Technology : Bluetooth \r\nBluetooth Version : Bluetooth 4.1 \r\nSound Output Mode : stereo \r\nConnections Type : Bluetooth, USB \r\nWeight : 1.61 oz ', '1290000');
INSERT INTO `produk` VALUES (13, 'Xiaomi Mi Max ', 'Mobile', '05042017005445xiaomi-announced-miui-8-globally-mi-max-available-in-india-505843-8.png', 'Release date: May 2016\r\nForm factor: Touchscreen\r\nDimensions (mm): 173.10 x 88.30 x 7.50\r\nWeight (g): 203.00\r\nBattery capacity (mAh): 4850\r\nRemovable battery: No\r\nColours: Silver, Gold, Dark Grey\r\nSAR value: NA\r\nScreen size (inches): 6.44\r\nTouchscreen: Yes\r\nResolution: 1080x1920 pixels\r\nPixels per inch (PPI): 342\r\nProcessor: hexa-core\r\nProcessor make: Qualcomm Snapdragon 650\r\nRAM: 3GB\r\nInternal storage: 32GB\r\nExpandable storage: Yes\r\nExpandable storage type: microSD\r\nExpandable storage up to (GB): 128\r\nRear camera: 16-megapixel\r\nFlash: Yes\r\nFront camera: 5-megapixel\r\nOperating System: Android 6.0.1\r\nSkin: MIUI 7\r\nWi-Fi: Yes\r\nWi-Fi standards supported: 802.11 b/g/n/ac\r\nGPS: Yes\r\nBluetooth: Yes, v 4.10\r\nNFC: No\r\nInfrared: Yes\r\nUSB OTG: Yes\r\nHeadphones: 3.5mm\r\nFM: Yes\r\nNumber of SIMs: 2\r\nCompass/ Magnetometer: No\r\nProximity sensor: Yes\r\nAccelerometer: Yes\r\nAmbient light sensor: Yes\r\nGyroscope: Yes\r\nBarometer: No\r\nTemperature sensor: No', '2220000');
INSERT INTO `produk` VALUES (14, 'Lenovo Vibe B ', 'Mobile', '05042017005926lenovo-smartphone-vibe-b-hero.png', 'Form factor: Touchscreen\r\nDimensions (mm): 132.50 x 66.00 x 9.90\r\nWeight (g): 144.00\r\nBattery capacity (mAh): 2000\r\nRemovable battery: No\r\nColours: Matte Black, Matte White\r\nSAR value: NA\r\nScreen size (inches): 4.50\r\nTouchscreen: Yes\r\nResolution: 480x854 pixels\r\nProcessor: 1GHz quad-core\r\nRAM: 1GB\r\nInternal storage: 8GB\r\nExpandable storage: Yes\r\nExpandable storage type: microSD\r\nExpandable storage up to (GB): 32\r\nRear camera: 5-megapixel\r\nFlash: Yes\r\nFront camera: 2-megapixel\r\nOperating System: Android 6.0\r\nWi-Fi: Yes\r\nWi-Fi standards supported: 802.11 b/g/n\r\nGPS: Yes\r\nBluetooth: Yes, v 3.00\r\nNFC: No\r\nInfrared: No\r\nUSB OTG: No\r\nHeadphones: 3.5mm\r\nFM: Yes\r\nNumber of SIMs: 2\r\nCompass/ Magnetometer: No\r\nProximity sensor: No\r\nAccelerometer: Yes\r\nAmbient light sensor: No\r\nGyroscope: No\r\nBarometer: No\r\nTemperature sensor: No', '3100000');
INSERT INTO `produk` VALUES (15, 'Samsung Np300', 'PC', '05042017100510P300 2.jpg', 'Prosesor: Core i3 2350M 2.3Ghz\r\nLayar: 14” LED HD\r\nRAM: 2 GB\r\nHardisk: 500 GB\r\nWifi: Ya\r\nBluetooth: Ya\r\nKamera: Ya\r\nFitur Lainnya: DVDRW, Card Reader, Nvidia Geforce GT520M 1GB, Batt 6 Cell', '5210000');
