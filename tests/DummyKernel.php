<?php

/*
 * This file is part of the Panther project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Symfony\Component\Panther\Tests;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DummyKernel implements KernelInterface
{
    public function serialize()
    {
    }

    public function unserialize($serialized)
    {
    }

    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
    }

    public function registerBundles()
    {
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
    }

    public function boot()
    {
    }

    public function shutdown()
    {
    }

    public function getBundles()
    {
    }

    public function getBundle($name, $first = true)
    {
    }

    public function locateResource($name, $dir = null, $first = true)
    {
    }

    public function getName()
    {
    }

    public function getEnvironment()
    {
    }

    public function isDebug()
    {
    }

    public function getRootDir()
    {
    }

    public function getContainer()
    {
        return new class() implements ContainerInterface {
            public function get($id, $invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE)
            {
            }

            public function has($id)
            {
                return false;
            }

            public function set($id, $service)
            {
            }

            public function initialized($id)
            {
                return true;
            }

            public function getParameter($name)
            {
                return null;
            }

            public function hasParameter($name)
            {
                return false;
            }

            public function setParameter($name, $value)
            {
            }
        };
    }

    public function getStartTime()
    {
    }

    public function getCacheDir()
    {
    }

    public function getLogDir()
    {
    }

    public function getCharset()
    {
    }

    public function getProjectDir()
    {
    }
}
