<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.markus-schindler.de/projects/zf2-twitterbootstrap-module>.
 */

namespace TwitterBootstrapModule\View\Helper;

use Zend\View\Helper\AbstractHelper;

class AbstractBase extends AbstractHelper
{
    const SIZE_DEFAULT = '';
    const SIZE_LARGE   = 'lg';
    const SIZE_SMALL   = 'sm';
    const SIZE_XSMALL  = 'xs';

    const STYLE_DEFAULT = 'default';
    const STYLE_PRIMARY = 'primary';
    const STYLE_SUCCESS = 'success';
    const STYLE_WARNING = 'warning';
    const STYLE_DANGER  = 'danger';
    const STYLE_INFO    = 'info';

    protected $sizes = [
        self::SIZE_DEFAULT,
        self::SIZE_LARGE,
        self::SIZE_SMALL,
        self::SIZE_XSMALL,
    ];

    protected $styles = [
        self::STYLE_DEFAULT,
        self::STYLE_PRIMARY,
        self::STYLE_SUCCESS,
        self::STYLE_WARNING,
        self::STYLE_DANGER,
        self::STYLE_INFO,
    ];

    protected $size = '';
    protected $style = 'default';
}