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

class Label extends AbstractBase
{
    public function __invoke($type = null, $label = null)
    {
        if ($type == null && $label == null) {
            return $this;
        }

        if (!in_array($type, $this->styles)) {
            $type = self::STYLE_DEFAULT;
        }

        return sprintf('<span class="label label-%s">%s</span>', $type, (string) $label);
    }

    public function success($label)
    {
        return sprintf('<span class="label label-success">%s</span>', (string) $label);
    }

    public function warning($label)
    {
        return sprintf('<span class="label label-warning">%s</span>', (string) $label);
    }

    public function primary($label)
    {
        return sprintf('<span class="label label-primary">%s</span>', (string) $label);
    }

    public function danger($label)
    {
        return sprintf('<span class="label label-danger">%s</span>', (string) $label);
    }

    public function info($label)
    {
        return sprintf('<span class="label label-info">%s</span>', (string) $label);
    }

    public function defaultLabel($label)
    {
        return sprintf('<span class="label label-default">%s</span>', (string) $label);
    }
}