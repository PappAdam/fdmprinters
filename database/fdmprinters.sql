-- Drop the printers table if it exists
DROP TABLE IF EXISTS printers;

-- Create a new table for printers with an auto-incrementing primary key
CREATE TABLE printers (
    id INTEGER PRIMARY KEY AUTOINCREMENT,  -- Auto-incrementing id field
    model TEXT NOT NULL,
    manufacturer TEXT NOT NULL,
    max_print_size TEXT,
    print_resolution TEXT
);

-- Insert 4 sample records into the printers table (no need to specify 'id' as it will auto-increment)
INSERT INTO printers (model, manufacturer, max_print_size, print_resolution) VALUES
('Ender 3', 'Creality', '220x220x250 mm', '0.1 mm'),
('Prusa i3 MK3S', 'Prusa Research', '250x210x210 mm', '0.05 mm'),
('Anycubic i3 Mega', 'Anycubic', '210x210x205 mm', '0.1 mm'),
('Ultimaker S3', 'Ultimaker', '230x190x200 mm', '0.02 mm');