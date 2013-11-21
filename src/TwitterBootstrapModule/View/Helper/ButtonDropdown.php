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

class ButtonDropdown extends AbstractBase
{
    const BASE_ID = 'dropdownMenu';

    protected $items = [];
    protected $id;
    protected $label;
    protected $dropup = false;

    public function __invoke()
    {
        return $this;
    }

    public function setDropUp()
    {
        $this->dropup = true;
        return $this;
    }

    public function setStyle($style)
    {
        if (!in_array($style, $this->styles)) {
            $style = self::STYLE_DEFAULT;
        }

        $this->style = $style;
        return $this;
    }

    public function render()
    {
        $items = implode("\n", $this->items);

        return sprintf('
            <div class="btn-group%s">
                <button type="button" class="btn %s dropdown-toggle" id="%s" data-toggle="dropdown">
                    %s <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="%s">
                    %s
                </ul>
            </div>',
            $this->dropup ? ' dropup' : '',
            'btn-' . $this->style,
            $this->id != null ? $this->id : self::BASE_ID,
            $this->label != null ? $this->label : 'nolabel',
            $this->id != null ? $this->id : self::BASE_ID,
            $items
        );
    }

    public function addItem($label, $href = null, $disabled = false)
    {
        $this->items[] = sprintf(
            '<li role="presentation"%s><a role="menuitem" tabindex="-1" href="%s">%s</a></li>',
            $disabled ? ' class="disabled"' : '',
            $href != null ? $href : '#',
            $label
        );

        return $this;
    }

    public function addSeparator()
    {
        $this->items[] = sprintf('<li role="presentation" class="divider"></li>');
        return $this;
    }

    public function addHeader($headline)
    {
        $this->items[] = sprintf('<li role="presentation" class="dropdown-header">%s</li>', (string) $headline);
        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel()
    {
        return $this->label;
    }
}