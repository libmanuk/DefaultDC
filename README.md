# DefaultDC
Omeka Plugin that allows administrators to specify default values for Dublin Core fields.  Dublin Core fields are then auto-filled with default values when records are created or edited.

## Notes

When a record is added or edited, if a default Dublin Core value has been configured and that specific field is blank, the default value will be inserted into the form field.  The value is then saved when the record is saved.

All Dublin Core fields have been included, even though for some fields like DC:Identifier, the metadata standard recommends unique values.  The thought here is that the field could still be "partially" auto-filled in a useful way.  For example, if each identifier started with a specific string.  

## License
This software on this site is provided "as-is," without any express or implied warranty. In no event shall libmanuk be held liable for any damages arising from the use of the software.
