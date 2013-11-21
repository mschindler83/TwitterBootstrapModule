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

class Panel extends AbstractBase
{
    protected $heading = null;
    protected $footer = null;

    public function __invoke()
    {
        return $this;
    }

    public function setHeading($text)
    {
        $this->heading = (string) $text;
        return $this;
    }

    public function getHeading()
    {
        return $this->heading;
    }

    public function setFooter($text)
    {
        $this->footer = (string) $text;
        return $this;
    }

    public function getFooter()
    {
        return $this->footer;
    }

    public function success($text)
    {
        return $this->renderPanel(self::STYLE_SUCCESS, $text);
    }

    public function warning($text)
    {
        return $this->renderPanel(self::STYLE_WARNING, $text);
    }

    public function primary($text)
    {
        return $this->renderPanel(self::STYLE_PRIMARY, $text);
    }

    public function danger($text)
    {
        return $this->renderPanel(self::STYLE_DANGER, $text);
    }

    public function info($text)
    {
        return $this->renderPanel(self::STYLE_INFO, $text);
    }

    public function defaultPanel($text)
    {
        return $this->renderPanel(self::STYLE_DEFAULT, $text);
    }

    protected function renderPanel($class, $text)
    {
        return sprintf('
            <div class="panel panel-%s">
                %s
                <div class="panel-body">
                    %s
                </div>
                %s
            </div>',
            $class,
            $this->heading != null ? '<div class="panel-heading">' . $this->heading . '</div>' : '',
            (string) $text,
            $this->footer != null ? '<div class="panel-footer">' . $this->footer . '</div>' : ''
        );
    }

    public function render($type, $text)
    {
        if (!in_array($type, $this->styles)) {
            $type = self::STYLE_DEFAULT;
        }

        return $this->renderPanel($type, $text);
   }
}