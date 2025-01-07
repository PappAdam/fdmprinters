-- Drop the printers table if it exists
DROP TABLE IF EXISTS printers;

-- Create a new table for printers with manual unique IDs
CREATE TABLE printers (
    id TEXT PRIMARY KEY,  -- Using TEXT type for unique string IDs
    model TEXT NOT NULL,
    manufacturer TEXT NOT NULL,
    max_print_size TEXT,
    print_resolution TEXT
);

-- Insert 4 sample records into the printers table with manually assigned unique IDs
INSERT INTO printers (id, model, manufacturer, max_print_size, print_resolution) VALUES
('1', 'Ender 3', 'Creality', '220x220x250 mm', '0.1 mm'),
('2', 'Prusa i3 MK3S', 'Prusa Research', '250x210x210 mm', '0.05 mm'),
('3', 'Anycubic i3 Mega', 'Anycubic', '210x210x205 mm', '0.1 mm'),
('4', 'Ultimaker S3', 'Ultimaker', '230x190x200 mm', '0.02 mm');