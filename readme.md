# Random String Generator

UUID are great. But should never be public.
Auto increment is dead.
But how do you share something to the web thats not crazy long (sorry uuid, you nuts) but also not a just a timestamp that on a large system be known to collide.

Well you generate a token / "hash" / random string and use that as something that is unique to link to the entity you want to find.

```
$generator = new StringOfFormat(4, 'ab');
$this->assertRegExp('/[ab]{4}/', $generator->generate());


$string = RandomStringGenerator::randomString(16);
echo $string;
// vuHlvV9NTCwBbIxa
```


### Pulled from, Citiations (and Thanks to):
https://stackoverflow.com/questions/1846202/php-how-to-generate-a-random-unique-alphanumeric-string
https://stackoverflow.com/questions/7493102/how-to-output-in-cli-during-execution-of-php-unit-tests
https://gnugat.github.io/2018/06/15/short-identifier.html

* 6 first characters: covers 16 777 216 hashes, but first collision happens after 4 096 hashes generated
* 7 first charecters: covers 268 435 456 hashes, but first collision happens after 16 384 hashes generated
* 8 first characters: covers 4 294 967 296 hashes, but first collision happens after 65 536 hashes generated

### Research:
https://www.quora.com/Cryptography-What-is-the-smallest-prefix-length-of-an-SHA1-hash-that-would-guarantee-uniqueness-in-a-reasonable-object-space

### Tools:
https://github.com/source-foundry/font-v/issues/2
https://emn178.github.io/online-tools/shake_256.html
http://www.getsolid.io/blog/birthday-paradox-coding-solid/
https://blog.codinghorror.com/url-shortening-hashes-in-practice/
https://medium.com/ingeniouslysimple/why-did-we-shift-away-from-database-generated-ids-7e0e54a49bb3

### Future:
https://symfony.com/doc/current/components/string.html