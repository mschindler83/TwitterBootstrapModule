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

class ProgressBar extends AbstractBase
{
    protected $min;
    protected $max;
    protected $currentValue;
    protected $text;

    protected $animated;
    protected $striped;

    protected $progressParts;

    protected $validClasses = [
        self::STYLE_SUCCESS,
        self::STYLE_WARNING,
        self::STYLE_DANGER,
    ];

    public function __invoke()
    {
        $this->progressParts = [];
        $this->animated = false;
        $this->striped = false;
        $this->text = '% Completed';

        return $this;
    }

    public function render()
    {
        $classes = [];

        if ($this->striped) {
            $classes[] = 'progress-striped';
        }

        if ($this->striped && $this->animated) {
            $classes[] = 'active';
        }

        $progressParts = implode("\n", $this->progressParts);

        return sprintf('
            <div class="progress %s">
                %s
            </div>' . "\n",
            (string) implode(' ', $classes),
            $progressParts
            );
    }

    public function addProgress($percent, $class = '')
    {
        if (!in_array($class, $this->validClasses)) {
            $class = null;
        }

        $this->progressParts[] = sprintf('
            <div class="progress-bar%s" style="width: %s">
                <span class="sr-only">%s%s</span>
            </div>',
            $class != null ? ' progress-bar-' . $class : '',
            (int) $percent . '%',
            (int) $percent,
            $this->text
        );

        return $this;
    }

    public function setCurrentValue($currentValue)
    {
        $this->currentValue = $currentValue;
        return $this;
    }

    public function getCurrentValue()
    {
        return $this->currentValue;
    }

    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    public function getMax()
    {
        return $this->max;
    }

    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setAnimated($animated = true)
    {
        $this->animated = (bool) $animated;
        return $this;
    }

    public function getAnimated()
    {
        return $this->animated;
    }

    public function setStriped($striped = true)
    {
        $this->striped = (bool) $striped;
        return $this;
    }

    public function getStriped()
    {
        return $this->striped;
    }
}