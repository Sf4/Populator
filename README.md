# Populator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Populator is a simple Array-To-Object library which transforms arrays into a given object

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require sf4/populator
```

## Usage

``` php
namespace Acme\Model;

class Foo
{
    protected $bar;
    public $public;
    public $publicWithSetter;

    public function setBar($bar)
    {
        $this->bar = $bar;
    }

    public function getBar()
    {
        return $this->bar;
    }

    public function setPublicWithSetter($var)
    {
        $this->publicWithSetter = $var;
    }
}

$data = array(
    'bar' => 'Foobaz!',
    'public' => 'Public!'
    'publicWithSetter' => 'BySetter'
);

/**
 * You can give either classname or an instance
 */
$foo = new Acme\Model\Foo();
$foo = 'Acme\Model\Foo';

$populator = new Sf4\Populator();
$newFoo = $populator->populate($data, $foo);

echo $newFoo->getBar();         // Foobaz!
echo $newFoo->public;           // Public!
echo $newFoo->publicWithSetter; // BySetter
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email siim.liimand@gmail.com instead of using the issue tracker.

## Credits

- [Siim Liimand][link-author]
- [Skeleton][link-skeleton]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sf4/populator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/sf4/populator/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/sf4/populator.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/sf4/populator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sf4/populator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sf4/populator
[link-travis]: https://travis-ci.org/sf4/populator
[link-scrutinizer]: https://scrutinizer-ci.com/g/sf4/populator/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/sf4/populator
[link-downloads]: https://packagist.org/packages/sf4/populator
[link-author]: https://github.com/siimliimand
[link-skeleton]: https://github.com/thephpleague/skeleton
