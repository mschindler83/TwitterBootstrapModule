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

use Zend\View\Helper\AbstractHelper;

class PageHeader extends AbstractHelper
{
    protected $subText = null;

    public function __invoke()
    {
        return $this;
    }

    public function setSubText($subText)
    {
        $this->subText = (string) $subText;
        return $this;
    }

    public function getSubText()
    {
        return $this->subText;
    }

    public function render($content, $subText = null)
    {
        if ($subText !== null) {
            $this->setSubText($subText);
        }

        return sprintf(
            '<div class="page-header"><h1>%s %s</h1></div>',
            (string) $content,
            $this->subText !== null ? '<small>' . $this->subText . '</small>' : ''
        );
    }
}