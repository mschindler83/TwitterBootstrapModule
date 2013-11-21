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

class ButtonGroup extends AbstractBase
{
    protected $vertical = false;
    protected $buttons = [];

    public function __invoke()
    {
        return $this;
    }

    public function setVertical()
    {
        $this->vertical = true;
        return $this;
    }

    public function getVertical()
    {
        return $this->vertical;
    }

    public function setSize($size)
    {
        if (!array_key_exists($size, $this->sizes)) {
            $size = self::SIZE_DEFAULT;
        }

        $this->size = $size;
        return $this;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function addButton($label, $style = self::STYLE_DEFAULT)
    {
        if (!array_key_exists($style, $this->styles)) {
            $style = self::STYLE_DEFAULT;
        }

        $this->buttons[] = ['label' => $label, 'style' => $style];
        return $this;
    }

    public function render()
    {
        return sprintf(
            '<div class="btn-group%s %s">%s</div>',
            $this->vertical ? '-vertical' : '',
            $this->sizes[$this->size] != self::SIZE_DEFAULT ? 'btn-group-' . $this->sizes[$this->size] : '',
            $this->renderButtons()
        );
    }

    protected function renderButtons()
    {
        $btnString = '';

        foreach ($this->buttons as $button) {

            $btnString .= sprintf(
                '<button type="button" class="btn btn-%s">%s</button>',
                $this->styles[$button['style']],
                $button['label']
            ) . "\n";

        }

        return $btnString;
    }
}