const matches = (obj, sourc) =>
    Object.keys(sourc).every(key => 
        obj.hasOwnProperty(key) && obj[key] === sourc[key]);

const object1 = {name:'John', age:25, city:'Bangkok'};
const object2 = {name:'John', age:25};

console.log(matches(object1, object2));

console.log(matches({age:25, hair:'long', beard:true},{hair:'long',bread:true}));

console.log(matches({hair: 'long', beard:true},{age:35, hair:'long',bread:true}));
















