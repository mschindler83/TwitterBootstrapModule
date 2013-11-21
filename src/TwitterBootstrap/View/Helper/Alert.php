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

namespace TwitterBootstrap\View\Helper;

class Alert extends AbstractBase
{
    public function __invoke($type, $label, $dismissable = false)
    {
        if (
            !in_array($type, ['warning', 'success', 'danger', 'info'])
            || $type == self::STYLE_DEFAULT
            || $type == self::STYLE_PRIMARY
        ) {
            $type = self::STYLE_INFO;
        }

        return $this->generic('alert-' . $type, $label, $dismissable);
    }

    protected function generic($class, $label, $dismissable = false)
    {
        $classes = ['alert', $class];
        $extra = '';

        if ($dismissable) {
            $classes[] = 'alert-dismissable';
            $extra = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        }

        return sprintf('<div class="%s">%s %s</div>', implode(' ', $classes), (string) $extra,  (string) $label);
    }

}