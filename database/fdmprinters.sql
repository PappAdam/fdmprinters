CREATE TABLE printers(
   id                  INTEGER  NOT NULL PRIMARY KEY 
  ,brand               VARCHAR(10) NOT NULL
  ,model               VARCHAR(13) NOT NULL
  ,price               INTEGER  NOT NULL
  ,build_volume_width  INTEGER  NOT NULL
  ,build_volume_depth  INTEGER  NOT NULL
  ,build_volume_height INTEGER  NOT NULL
  ,technology          VARCHAR(3) NOT NULL
  ,features            VARCHAR(67) NOT NULL
  ,filament_support    VARCHAR(40) NOT NULL
  ,connectivity        VARCHAR(22) NOT NULL
  ,layer_resolution    VARCHAR(15) NOT NULL
  ,nozzle_diameter     VARCHAR(5) NOT NULL
);
INSERT INTO printers(id,brand,model,price,build_volume_width,build_volume_depth,build_volume_height,technology,features,filament_support,connectivity,layer_resolution,nozzle_diameter) VALUES (1,'Creality','Ender 3 V2',279,220,220,250,'FDM','Resume Printing Function, Carborundum Glass Bed, Silent Motherboard','PLA, ABS, PETG, TPU','SD Card, USB','100-400 microns','0.4mm');
INSERT INTO printers(id,brand,model,price,build_volume_width,build_volume_depth,build_volume_height,technology,features,filament_support,connectivity,layer_resolution,nozzle_diameter) VALUES (2,'Prusa','i3 MK4',799,250,210,210,'FDM','Auto Bed Leveling, Removable Print Sheets, Silent Operation','PLA, ABS, PETG, TPU, Nylon','USB, Wi-Fi, Ethernet','50-200 microns','0.4mm');
INSERT INTO printers(id,brand,model,price,build_volume_width,build_volume_depth,build_volume_height,technology,features,filament_support,connectivity,layer_resolution,nozzle_diameter) VALUES (3,'FlashForge','Adventurer 4',799,220,200,250,'FDM','Flexible Build Plate, Built-in Camera, Auto Filament Loading','PLA, ABS, PETG, Wood','USB, Wi-Fi, Cloud','100-500 microns','0.4mm');
INSERT INTO printers(id,brand,model,price,build_volume_width,build_volume_depth,build_volume_height,technology,features,filament_support,connectivity,layer_resolution,nozzle_diameter) VALUES (4,'Bambu Lab','X1 Carbon',1199,256,256,256,'FDM','Multi-Material Support, High-Speed Printing, Built-in Lidar','PLA, ABS, PETG, TPU, Nylon, Carbon Fiber','Wi-Fi, Ethernet, Cloud','50-300 microns','0.4mm');
INSERT INTO printers(id,brand,model,price,build_volume_width,build_volume_depth,build_volume_height,technology,features,filament_support,connectivity,layer_resolution,nozzle_diameter) VALUES (5,'Artillery','Sidewinder X2',399,300,300,400,'FDM','Direct Drive Extruder, Ultra-Quiet Operation, Dual Z-axis','PLA, ABS, PETG, TPU','SD Card, USB','100-400 microns','0.4mm');
INSERT INTO printers(id,brand,model,price,build_volume_width,build_volume_depth,build_volume_height,technology,features,filament_support,connectivity,layer_resolution,nozzle_diameter) VALUES (6,'Anycubic','Kobra Plus',499,300,300,350,'FDM','Auto Bed Leveling, Fast Printing Speeds, Removable Glass Bed','PLA, ABS, PETG, TPU','USB, SD Card','100-400 microns','0.4mm');
INSERT INTO printers(id,brand,model,price,build_volume_width,build_volume_depth,build_volume_height,technology,features,filament_support,connectivity,layer_resolution,nozzle_diameter) VALUES (7,'Voxelab','Aquila X2',199,220,220,250,'FDM','Resume Printing Function, Quiet Stepper Drivers, Glass Build Plate','PLA, ABS, PETG, TPU','SD Card, USB','100-400 microns','0.4mm');
INSERT INTO printers(id,brand,model,price,build_volume_width,build_volume_depth,build_volume_height,technology,features,filament_support,connectivity,layer_resolution,nozzle_diameter) VALUES (8,'Qidi Tech','X-Plus',699,270,200,200,'FDM','Dual Extruder, Enclosed Build Chamber, Touchscreen Interface','PLA, ABS, PETG, TPU, Nylon','USB, Wi-Fi','50-200 microns','0.4mm');
