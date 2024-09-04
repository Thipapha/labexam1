const byte_Size = str => new Blob([str]).size;
console.log(byte_Size('123456'));
console.log(byte_Size('Hello world'));
console.log(byte_Size('Ã¢'));